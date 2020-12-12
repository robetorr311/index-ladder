<template>
    <div class="container" style="margin-top: 50px;">
      <div v-if="none>0">  
        <div class="text-center">
            <h4>Please Upload the Avatar Picture </h4><br>
            <div style="max-width: 500px; margin: 0 auto;">
                <div v-if="success !== ''" class="alert alert-success" role="alert">
                    {{success}}
                </div>
                <form @submit="submitForm" enctype="multipart/form-data">
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" name="avatar" class="custom-file-input" id="inputFileUpload"
                                   v-on:change="onFileChange">
                            <label class="custom-file-label" for="inputFileUpload">Choose file</label>
                        </div>
                        <div class="input-group-append">
                            <input type="submit" class="btn btn-primary" value="Upload">
                        </div>
                    </div>
                    <br>
                    <p class="text-danger font-weight-bold">{{avatar}}</p>
                </form>
            </div>
        </div>
      </div>
      <div v-else> 
        <div class="text-center" v-if="editAvatar">
            <h4>Please Upload the New Avatar Picture </h4><br>
            <div style="max-width: 500px; margin: 0 auto;">
                <div v-if="updated !== ''" class="alert alert-success" role="alert">
                    {{success}}
                </div>
                <form @submit="UpdateForm" enctype="multipart/form-data">
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" name="avatar" class="custom-file-input" id="inputFileUpload"
                                   v-on:change="onFileChange">
                            <label class="custom-file-label" for="inputFileUpload">Choose file</label>
                        </div>
                        <div class="input-group-append">
                            <input type="submit" class="btn btn-primary" value="Upload">
                        </div>
                    </div>
                    <br>
                    <p class="text-danger font-weight-bold">{{avatar}}</p>
                </form>
            </div>
        </div>
        <div class="text-center" v-else>
            <p>Avatar Uploaded</p>
          <span class="rounded-circle">
           <img :src="UrlAvatar" class="rounded-circle" width="100px" height="100px">
           <span class="card-title cursor"><i class="fas fa-pencil-alt" @click="ChangeAvatar"></i></span>
          </span>
        </div>        
      </div>      
    </div>

</template>

<script>
    export default {
        data() {
            return {
                avatar: '',
                HaveAvatar: '',
                file: '',
                success: '',
                none: 1,
                editAvatar: false,
            };
        },
        props: [
            'UrlAvatar'
          ],        
          methods: {
            ChangeAvatar(){
                this.editAvatar=true;
            },
            onFileChange(e) {
                this.avatar = "Selected File: " + e.target.files[0].name;
                this.file = e.target.files[0];
            },
            submitForm(e) {
                e.preventDefault();
                let currentObj = this;
                const config = {
                    headers: {
                        'content-type': 'multipart/form-data',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                    }
                }

                // form data
                let formData = new FormData();
                formData.append('file', this.file);

                var value = localStorage['URLroot'];
                axios.post(value + '/upload/avatar', formData, config)
                    .then(function (response) {
                        currentObj.success = 'Uploaded';
                        currentObj.avatar = "";
                    })
                    .catch(function (error) {
                        currentObj.output = error;
                    });
            },
            UpdateForm(e) {
                e.preventDefault();
                let currentObj = this;
                const config = {
                    headers: {
                        'content-type': 'multipart/form-data',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                    }
                }
                let formData = new FormData();
                formData.append('file', this.file);
                var value = localStorage['URLroot'];
                axios.post(value + '/change/avatar', formData, config)
                    .then(function (response) {
                        currentObj.success = 'Updated';
                        currentObj.avatar = "";
                        location.reload();
                    })
                    .catch(function (error) {
                        currentObj.output = error;
                    });
            }
        },
        mounted() {
            axios.get(localStorage['URLroot'] + '/images/haveavatar').then(response => (this.HaveAvatar = response.data));
            console.log(this.UrlAvatar);
            if(this.UrlAvatar=='none'){
              this.none=1;
            }
            else{
                this.none=0;
            }
        }         

    }
</script>