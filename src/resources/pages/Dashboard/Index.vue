<template>
    <h1>Dashboard Test</h1>
    <Link :href="route('dashboard.show')">Show</Link>
</template>

<script>
import {Link} from '@inertiajs/inertia-vue3'

export default {
    components: {
        Link
    },
}
</script>
