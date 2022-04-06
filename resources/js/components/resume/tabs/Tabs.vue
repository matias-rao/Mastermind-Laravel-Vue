<template>
<BTabs v-model="tab">
    <slot></slot>
    <div>
        <BButtonGroup class="w-100 mt-4">
            <BButton block class="m-0" variant="secondary" @click="tab--">Previous</BButton>
            <BButton block class="m-0" variant="primary" @click="tab++">Next</BButton>
        </BButtonGroup>
    </div>
</BTabs>
</template>
<script>
import {BTabs, BButtonGroup, BButton} from "bootstrap-vue";
export default {
    name: 'Tabs',
    components: {
        BButton,
        BButtonGroup,
        BTabs
    },
    data(){
        return {
            tab: 0,
        }
    }
}
</script>
