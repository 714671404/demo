<template>
    <page :mess="mess"></page>
</template>

<script>
    import Page from './Page'
    export default {
        components: {
            Page
        },
        data () {
            return {
                mess: '111'
            }
        },

    }
</script>