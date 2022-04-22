<template>
    <div>
        <Top></Top>
        <QuickView></QuickView>
        <Mid></Mid>
        <Bot></Bot>
    </div>
</template>

<style lang="scss" scoped>
</style>

<script>
    import Top from './components/Top.vue'
    import Mid from './components/Mid.vue'
    import Bot from './components/Bot.vue'
    import QuickView from '../../components/modals/QuickView.vue'
    export default {             
        components: {
            Top,
            Mid,
            Bot,
            QuickView
        },                                  
    }
</script>