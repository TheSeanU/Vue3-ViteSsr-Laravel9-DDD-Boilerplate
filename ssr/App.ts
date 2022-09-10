import { defineComponent, h } from "vue";
import BasicLayout from 'Infrastructure/Layout/BasicLayout.vue'

export default defineComponent({
    name: 'Client',
    setup() {
        return () => h('div', [h(BasicLayout)]);
    },
});