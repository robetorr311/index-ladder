<template>
    <div class="container" style="margin-top: 50px;">
      <div v-if="UrlL==='none'">  
        <div class="text-center">
            <h4>Please Upload the Driver License </h4><br>
            <div style="max-width: 500px; margin: 0 auto;">
                <div v-if="success !== ''" class="alert alert-success" role="alert">
                    {{success}}
                </div>
                <form @submit="submitForm" enctype="multipart/form-data">
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" name="license" class="custom-file-input" id="inputFileUpload"
                                   v-on:change="onFileChange">
                            <label class="custom-file-label" for="inputFileUpload">Choose file</label>
                        </div>
                        <div class="input-group-append">
                            <input type="submit" class="btn btn-primary" value="Upload">
                        </div>
                    </div>
                    <br>
                    <p class="text-danger font-weight-bold">{{license}}</p>
                </form>
            </div>
        </div>
      </div>
      <div v-else>  
        <div class="text-center">
           <h4>Driver License Uploaded</h4>
        </div>
      </div>      
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component successfully mounted.')
        },
        data() {
            return {
                license: '',
                file: '',
                success: '',
                none: 1,
                UrlL:'',
            };
        },
        props: [
          ],        
          methods: {
            UrlLic(response){
              this.UrlL= response.image_url;
            },            
            onFileChange(e) {
                //console.log(e.target.files[0]);
                this.license = "Selected File: " + e.target.files[0].name;
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
                axios.post(value + '/upload/license', formData, config)
                    .then(function (response) {
                        currentObj.success = 'Uploaded';
                        currentObj.license = "";
                    })
                    .catch(function (error) {
                        currentObj.output = error;
                    });
                    location.reload();
            }
        },
        mounted() {
          axios.get(localStorage['URLroot'] + '/profile/UrlIdent/2').then(response => (this.UrlLic(response.data)));
        }         

    }
</script>