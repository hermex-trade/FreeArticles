<template>
    <div>
        <div v-if="meetCondition">
            
        </div>
    </div>
</template>

<script>
export default {
    props: [
        "id",
        "variationId",
        "img",
        "text",
        "type",
        "condition"
    ],
    computed: {
        meetCondition() {
            if (type === "category") {
                // TODO implement
                // Check if a variation in the basket is category
                // loop over all items in basket and check if category is there
            }
            else if (type === "variation") {
                // TODO implement
                // Check if variationId is in basket
                // loop over all items in basket and check if variation is there
            }
            else if (type === "basket") {
                // TODO implement
                // Check if basketvalue has reached the amount
                if (basketTotal >= this.condition) {
                    return true
                } 
            }
            return false
        },
        basketTotal() {
            return vueApp.$store.state.basket.data.basketAmount - vueApp.$store.state.basket.data.shippingAmount;
        }
    },  
}


</script>

<style>

</style>