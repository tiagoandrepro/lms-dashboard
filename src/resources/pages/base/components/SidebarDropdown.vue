<template>
    <li class="nav-item">
        <a data-toggle="collapse" :href="'#'+link.path">
            <i class="fas fa-layer-group"></i>
            <p>Base</p>
            <span class="caret"></span>
        </a>
        <div class="collapse" :id="link.path">
            <ul class="nav nav-collapse">
                <li v-for="link in link.children">
                    <Link href="components/avatars.html">
                        <span class="sub-item">{{  link.name }}</span>
                    </Link>
                </li>
            </ul>
        </div>
    </li>
</template>
<script>
import { Link } from '@inertiajs/inertia-vue3'
export default {
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
