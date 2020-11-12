<template>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-10">

        <div class="text-center">
            <h4>Please Upload the Picture </h4><br>
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
      </div>
      <div class="row justify-content-center">
        <div class="col-md-10">      
          <div class="table-responsive">
            <table class="table table-bordered table-sm">
              <thead>
                <tr>
                  <th>Picture</th>
                  <th>Name</th>
                  <th>Options</th>
                </tr>
              </thead>
              <tbody>
                <tr v-for="item in GetUploaded" >
                  <td><img :src="item.image_url" width="100px" ></td>
                  <td>{{ item.name }}</td>
                  <td></td>
                </tr>
              </tbody>
            </table>
           </div>
        </div>
      </div>
  </div>
</template>

<script>
    export default {
        data() {
            return {
                picture: '',
                Havepicture: '',
                file: '',
                success: '',
                none: 1,
                GetUploaded:''
            };
        },
        props: [
            'Urlpicture'
          ],        
          methods: {
            GetPictures(){
              axios.get(localStorage['URLroot'] + '/GetUploaded').then(response => (this.GetUploaded = response.data));
            },
            onFileChange(e) {
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
                axios.post(value + '/upload/product', formData, config)
                    .then(function (response) {
                        currentObj.success = 'Uploaded';
                        currentObj.picture = "";
                    })
                    .catch(function (error) {
                        currentObj.output = error;
                    });
                this.GetPictures();
            }
        },
        mounted() {
        }         

    }
</script>