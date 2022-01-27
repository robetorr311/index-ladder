<template>
<form action="/charge" method="post" id="payment-form">
    <div>
        <h3>Manage Your Subscription</h3>
        <label>Card</label>
        <div id="card-element">

        </div>
    </div>
</form>
</template>

<script>
    export default {
        data(){
            return {
                stripeAPIToken: 'pk_test_',
    
                stripe: '',
                elements: '',
                card: ''
            }
        },
    
        mounted(){
            this.includeStripe('js.stripe.com/v3/', function(){
                this.configureStripe();
            }.bind(this) );
        },
    
        methods: {
            /*
                Includes Stripe.js dynamically
            */
            includeStripe( URL, callback ){
                let documentTag = document, tag = 'script',
                    object = documentTag.createElement(tag),
                    scriptTag = documentTag.getElementsByTagName(tag)[0];
                object.src = '//' + URL;
                if (callback) { object.addEventListener('load', function (e) { callback(null, e); }, false); }
                scriptTag.parentNode.insertBefore(object, scriptTag);
            },
    
            /*
                Configures Stripe by setting up the elements and 
                creating the card element.
            */
            configureStripe(){
                this.stripe = Stripe( this.stripeAPIToken );
    
                this.elements = this.stripe.elements();
                this.card = this.elements.create('card');
    
                this.card.mount('#card-element');
            },
        }
    }
</script>    