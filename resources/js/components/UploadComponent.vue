<template>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-10">
        <div class="text-center">
            <h4>Please Upload the Images For Item </h4><br>
            <div style="max-width: 500px; margin: 0 auto;">
                <div v-if="success !== ''" class="alert alert-success" role="alert">
                    {{success}}
                </div>
                <ValidationObserver v-slot="{ invalid }">
                <form @submit="submitForm" enctype="multipart/form-data">
                  <ValidationProvider rules="ext:jpg,png" ref="picture" v-slot="{ errors, validate }">
                    <div class="file-field">
                      <div class="btn btn-primary"><i class="fas fa-paperclip" aria-hidden="true"></i>
                        <input type="file" name="picture" id="inputFileUpload" @input="onFileChange" @change="validate" style="display:none">
                        <label for="inputFileUpload">Choose Your File Please</label>
                      </div>
                      </div>
                      <span class="has-error">{{ errors[0] }}</span>
                      <p class="categorieslink">{{picture}}</p>
                            <button type="submit" class="btn btn-primary" :disabled="invalid"><i class="fas fa-cloud-upload-alt" aria-hidden="true"></i> Upload</button>
                    
                  </ValidationProvider>
                    <br>
                    

                </form>
              </ValidationObserver>
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
                  <td><span class="categorieslink"><i class="fas fa-trash-alt" @click="delete_image(item.id)"></i></span></td>
                </tr>
              </tbody>
            </table>
           </div>
        </div>
      </div>
  </div>
</template>

<script>
import { ValidationObserver } from 'vee-validate';
import { ValidationProvider } from 'vee-validate';
import { extend } from 'vee-validate';
import { ext, image, required } from 'vee-validate/dist/rules';
import * as rules from 'vee-validate/dist/rules';
extend('ext', {
  message: 'Only .jpg and .png files allowed'
});
    export default {
        components: {
          ValidationObserver,
          ValidationProvider,
        },      
        data() {
            return {
                picture: '',
                Havepicture: '',
                file: '',
                success: '',
                none: 1,
                GetUploaded:'',
                IsDeleted: ''
            };
        },
        props: [
            'Urlpicture'
          ],
          methods: {
            validateField (field) {
              const provider = this.$refs[field];
              console.log(provider);
              return provider.validate();
            },
            GetPictures(){
              axios.get(localStorage['URLroot'] + '/GetUploaded').then(response => (this.GetUploaded = response.data));
            },
            onFileChange(e) {
                this.picture = "Selected File: " + e.target.files[0].name;
                this.file = e.target.files[0];
            },
            delete_image(id){
              console.log(id);
              axios.post( localStorage['URLroot'] + '/imagedelete' ,
              {
                csrfToken: myToken.csrfToken,
                image_id: id
              }
              ).then(response => (this.IsDeleted = response.data));
              this.GetPictures();
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
                        this.GetPictures();
                    })
                    .catch(function (error) {
                        currentObj.output = error;
                    });
                this.GetPictures();
            }
        },
        mounted() {
            this.GetPictures();
        }         

    }
</script>