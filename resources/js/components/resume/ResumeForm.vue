<template>
    <div>
        <Tabs>

            <input type="hidden" name="content" v-bind:value="JSON.stringify(resume.content)" />

            <!--
                TODO: Si titulo y contenido son valores nulos, devolver errores por laravel, no mostrar al usuario errores SQL
                Pistas: Se debera utilizar las propiedades para pasar los errores que devuelva laravel
                BonusTrack: Si existe algun error, y algun campo de content tenia un valor, que lo traiga.

                eventhandler
            -->
            <Tab title="Basics" icon="fas fa-user" >
                <strong v-if="errors.length != 0" class="alert-danger">
                    Please fix the following error(s):
                    <ul>
                        <li v-for="error in errors">{{ error }}</li>
                    </ul>
                </strong>

                <VueFormGenerator
                    :schema="schemas.basics"
                    :model="resume.content.basics"
                    :options="options"
                />
                <VueFormGenerator
                    :schema="schemas.location"
                    :model="resume.content.basics.location"
                    :options="options"
                />
            </Tab>

            <Tab title="Profiles" icon="fa fa-users">
                <DynamicForm
                    title="Profile"
                    self="profiles"
                    :model="resume.content.basics"
                    :schema="schemas.profiles"
                />
            </Tab>
            <Tab title="Work" icon="fa fa-briefcase">
                <DynamicForm
                    title="Work"
                    self="work"
                    :model="resume.content"
                    :schema="schemas.work"
                />
            </Tab>
            <Tab title="Education" icon="fa fa-graduation-cap">
                <DynamicForm
                    title="Education"
                    self="education"
                    :model="resume.content"
                    :schema="schemas.education"
                />
            </Tab>
            <button type="submit" >Enviar</button>
        </Tabs>
    </div>
</template>
<script>
import Tabs from './tabs/Tabs';
import Tab from './tabs/Tab';
import basics from "./schema/basics/basics";
import location from "./schema/basics/location";
import work from "./schema/work";
import education from "./schema/education";
import profiles from "./schema/basics/profiles";
import DynamicForm from "./dynamic/DynamicForm";
import {component as VueFormGenerator} from 'vue-form-generator';
import 'vue-form-generator/dist/vfg.css';
 export default {
    name: 'ResumeForm',
     components: {
        Tabs, Tab, VueFormGenerator, DynamicForm
     },
     props: ['errors', 'info' ],
     beforeCreate() {
        console.log(this.$props);
     },

     mounted: function () {
         console.log(this.$props);
         this.$nextTick(function () {
             // Code that will run only after the
             // entire view has been rendered
             if(this.$props.info){
                 this.resume.content = JSON.parse(this.$props.info);

             }
         })
     },
     data(){
        return{

            resume: {
                title: '',
                content: {
                    basics: {
                        location: {},
                    }
                }
            },
            schemas: {
                basics, location, profiles, work, education
            },
            options:{
                validateAfterLoad: true,
                validateAfterChanged:true,
                ValidateAsync: true
            },

        }
     }
 }
</script>
