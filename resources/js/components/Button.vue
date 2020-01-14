<template>
    <button :class="type">{{name}}</button>
</template>

<script>
    export default {
        name: 'Button',
        props: [ 'type', 'name' ]
    }

</script>
<style scoped>
    button.primary {
        background: blue;
        color: white;
    }
</style>
