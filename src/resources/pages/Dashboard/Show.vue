<template>
    <h1>Show Page Test</h1>
    <Link :href="route('dashboard.edit')">Show</Link>
</template>
<script>
import {Link} from '@inertiajs/inertia-vue3'

export default {
    components: {
        Link
    },
}
</script>
