<template>
    <div class="m-2">
        <div v-for="(form, i) in target[prop]" :key="i" class="row mb-3">
            <div class="col-sm">
                <div class="card">
                    <div class="card-header d-sm-flex justify-content-between">
                        <div>
                            {{ title }}
                        </div>
                        <div>
                            <button class="btn btn-danger btn-block" @click.prevent="remove(i)">
                                Delete <i class="fa fa-trash"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <VueFormGenerator
                            :schema="schema"
                            :model="model[self][i]"
                            :options="options"
                        />
                    </div>
                </div>
            </div>
        </div>
        <button class="btn btn-primary" type="submit" @click.prevent="add()">Add New</button>
    </div>
</template>
<script>
import {component as VueFormGenerator} from 'vue-form-generator';
import mixin from './mixin';

export default {
    name: 'DynamicForm',
    mixins: [mixin],
    components: {
        VueFormGenerator,
    },
    props: {
        schema: {
            type: Object,
            required: true,
        },
    },
    data(){
        return{
            options: {
                validateAfterLoad: true,
                validateAfterChanged:true,
                ValidateAsync: true
            },
        }
    },
};
</script>
