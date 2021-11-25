<template>
    <li class="nav-item">
        <Link data-toggle="collapse" :href="link.path">
            <i :class="link.icon"></i>
            <p>{{ link.name }}</p>
        </Link>
    </li>
</template>
<script>
import { Link } from '@inertiajs/inertia-vue3'
export default {
    name: 'sidebar-item',
    components: {
        Link
    },
    props: {
        link: {
            type: Object,
            default: () => {
                return {
                    name: '',
                    path: '',
                    icon: '',
                    children: []
                };
            },
        }
    },
}
</script>
