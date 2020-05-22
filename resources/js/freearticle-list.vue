<template>
    <div>
        <freearticle v-for="article in articles"
            :key="article.id" 
            :type="article.type"
            :condition="article.condition" />
    </div>
</template>

<script>

import freearticle from './freearticle'

export default {

computed: {
    meetConditions() {
        
    }
}

}
</script>

<style>

</style>