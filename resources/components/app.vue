<template>
    <div class="container">
        <h1 class="text-center mt-5">Hola desde Vue.js</h1>
        <p class="text-center">Este es un componente para Vue</p>

        <div class="text-center mt-4">
            <p>Mensaje: {{ message }}</p>
            <button @click="changeMessage" class="btn btn-primary">Cambiar mensaje</button>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            message: 'Hola, people!'
        }
    },
    methods: {
        changeMessage() {
            this.message = 'Bueno, un diseño base normal';
        }
    }
}
</script>

<style scoped>
.container {
    max-width: 800px;
    margin: 0 auto;
}
.text-center {
    text-align: center;
}
.mt-5 {
    margin-top: 3rem;
}
.mt-4 {
    margin-top: 1.5rem;
}
</style>
