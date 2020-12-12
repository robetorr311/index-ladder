<template>
    <div class="container" style="margin-top: 50px;">
      <div v-if="none>0">
        <div class="text-center">
            <h4>Please Upload Your Selfie</h4><br>
            <div style="max-width: 500px; margin: 0 auto;">
                <div v-if="success !== ''" class="alert alert-success" role="alert">
                    {{success}}
                </div>
                <form @submit="submitForm" enctype="multipart/form-data">
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" name="picture" class="custom-file-input" id="inputFileUpload"
                                   v-on:change="onFileChange">
                            <label class="custom-file-label" for="inputFileUpload">Choose file</label>
                        </div>
                        <div class="input-group-append">
                            <input type="submit" class="btn btn-primary" value="Upload">
                        </div>
                    </div>
                    <br>
                    <p class="text-danger font-weight-bold">{{picture}}</p>
                </form>
            </div>
        </div>
      </div>
      <div v-else>  
        <div class="text-center">
           <h4>Picture Uploaded</h4>
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
                picture: '',
                file: '',
                success: '',
                none:1
            };
        },
        props: [
            'UrlPicture'
          ],
          methods: {
            onFileChange(e) {
                //console.log(e.target.files[0]);
                this.picture = "Selected File: " + e.target.files[0].name;
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
                axios.post(value + '/upload/picture', formData, config)
                    .then(function (response) {
                        currentObj.success = 'Uploaded';
                        currentObj.picture = "";
                    })
                    .catch(function (error) {
                        currentObj.output = error;
                    });
            }
        },
        mounted(){
            if(this.UrlPicture=='none'){
              this.none=1;
            }
            else{
                this.none=0;
            }                
        }
    }
</script>