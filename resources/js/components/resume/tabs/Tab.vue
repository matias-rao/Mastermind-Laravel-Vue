<template>
    <BTab>
        <template #title>
            <div class="d-flex justify-content-center">
                <div>
                    <i :class="icon"></i>
                </div>
                <div class="mx-2">
                    {{title}}
                </div>
            </div>
        </template>
        <slot></slot>
    </BTab>
</template>
<script>
import { BTab } from 'bootstrap-vue';
export default {
    name: 'Tab',
    props: {
      title: {
          type: String,
          required: true,
      },
      icon:{
          type: String,
          required: true,
      }

    },
    components: {
        BTab,
    }
}
</script>
