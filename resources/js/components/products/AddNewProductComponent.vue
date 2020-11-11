<template>
  <ValidationObserver v-slot="{ invalid }">
    <div class="container"> 
      <div class="row justify-content-center">
        <div class="col-md-10">
          <div class="card">
            <div class="card-header">Add New Item</div>
              <div class="card-body">
                <h4 class="card-title">
                  <div class="row">
                    <div class="col">
                      <p class="text-left"></p>
                    </div>
                    <div class="col">
                    <p class="text-right"></p>
                    </div>
                  </div>
                </h4>
                <p class="card-text"></p>
                <p class="card-text"></p>             
              </div>
              <div class="card-footer">
                <div class="row">
                  <div class="col">
                    <p class="text-left">
                    </p>
                  </div>
                  <div class="col">
                    <p class="text-right">
                    </p>
                  </div>
                </div>
              </div>
          </div>
        </div>
      </div>

     
    </div>
  </ValidationObserver>   
</template>
<script>
import { ValidationObserver } from 'vee-validate';
import { ValidationProvider } from 'vee-validate';
import { extend } from 'vee-validate';
import { confirmed, required, email } from 'vee-validate/dist/rules';
import * as rules from 'vee-validate/dist/rules';
Object.keys(rules).forEach(rule => {
  extend(rule, rules[rule]);
});

// with typescript
for (let [rule, validation] of Object.entries(rules)) {
  extend(rule, {
    ...validation
  });
}
// No message specified.
extend('email', email);

// Override the default message.
extend('confirmed', {
  ...confirmed,
  message: 'The value does not match'
});
extend('required', {
  ...required,
  message: 'This field is required'
});
export default {
  components: {
    ValidationObserver,
    ValidationProvider,
  },
  data() {
    return {

      }
    },
    props: [],
    methods: {     
    },
    mounted() {
            console.log('AddNewProductComponent Mounted')
    }     
}
</script>