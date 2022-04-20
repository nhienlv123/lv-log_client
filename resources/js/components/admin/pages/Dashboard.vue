<template>
<div>
    <div v-if="isLoged">       
        ADMIN        
    </div>
    <div v-else>not sign in</div>
</div>
</template>

<script>
    export default {        
        props: {
            isLoged: { type: Boolean},
        }
    }
</script>

<style>

</style>