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
                    <ValidationProvider rules="ext:jpg,png" ref="picture2" v-slot="{ errors, validate }">
                    <div class="file-field">
                      <div class="btn btn-primary"><i class="fas fa-paperclip" aria-hidden="true"></i>
                        <input type="file" name="picture2" id="inputFileUpload2" @input="onFileChange" @change="validate" style="display:none">
                        <label for="inputFileUpload2">Choose Your File Please</label>
                      </div>
                      </div>
                      <span class="has-error">{{ errors[0] }}</span>
                      <p class="categorieslink">{{picture2}}</p>
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
                <tr v-for="item in GetExcUploaded" >
                  <td><img :src="item.image_url" width="100px" ></td>
                  <td>{{ item.name }}</td>
                  <td><span class="categorieslink"><i class="fas fa-trash-alt" @click="delete_Exch_image(item.id)"></i></span></td>
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
                picture2: '',
                Havepicture: '',
                file: '',
                success: '',
                none: 1,
                GetExcUploaded:'',
                IsDeleted: '',
                type: this.typeValue,
                exchange_id:'',
            };
        },
        props: [
            'productValue',
            'typeValue',
            'editValue'
          ],
          methods: {
            validateField (field) {
              const provider = this.$refs[field];
              return provider.validate();
            },
            GetExcUp(response){
              this.GetExcUploaded=response;
            },
            SetExchUploaded(resp){
              axios.get(localStorage['URLroot'] + '/GetUploaded/' + this.typeValue).then(response => (this.GetExcUp(response.data)));
            },
            GetExchPictures(){
              axios.get(localStorage['URLroot'] + '/GetUploaded/' + this.typeValue).then(response => (this.SetExchUploaded(response.data)));
            },
            onFileChange(e) {
                this.picture2 = "Selected File: " + e.target.files[0].name;
                this.file = e.target.files[0];
            },
            delete_Exch_image(id){
              axios.post( localStorage['URLroot'] + '/imagedelete' ,
              {
                csrfToken: myToken.csrfToken,
                image_id: id,
                type: 2
              }
              ).then(response => (this.GetExcUploaded = response.data));
              this.GetExchPictures();
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
                let formData = new FormData();
                formData.append('file', this.file);
                formData.append('type', this.typeValue);
                var value = localStorage['URLroot'];
                axios.post(value + '/upload/product', formData, config)
                    .then(function (response) {
                        currentObj.success = 'Uploaded';
                        currentObj.picture2 = "";
                        currentObj.GetExcUploaded=response.data;
                    })
                    .catch(function (error) {
                        currentObj.output = error;
                    });
                //this.GetExchPictures();
            },
            GetEx(response){
              this.exchange_id=response.exchange_id;
              this.GetExchEditPictures(response.exchange_id);
            },
            setValues(data){
              axios.get( localStorage['URLroot'] + '/GetTrade/' + data.tradde_id).then(response => (this.GetEx(response.data)));
            },            
            GetExchEditPictures(id){
              axios.get(localStorage['URLroot'] + '/GetEditPictures/' + id + '/' + this.typeValue).then(response => (this.GetExcUploaded = response.data));
            }
        },
        mounted() {
          if(this.editValue>0){
            axios.get( localStorage['URLroot'] + '/GetItem/' + this.productValue).then(response => (this.setValues(response.data)));
          }
          else {
            this.GetExchPictures();
          }
        }         

    }
</script>