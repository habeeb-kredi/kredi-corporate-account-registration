

<template>
    <Head title="Dashboard" />

    <BreezeAuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Welcome to Kredi Bank
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">

                        <table class="table w-full">

                            <tbody>

                            <tr>
                                <th>Organization Name</th>
                                <td>{{ this.$props.client.organization_name }}</td>
                            </tr>
                            <tr>
                                <th>RC Number</th>
                                <td>{{this.$props.client.rc_number }}</td>
                            </tr>
                            <tr>
                                <th>Country</th>
                                <td>{{this.$props.client.country }}</td>
                            </tr>
                            <tr>
                                <th>Business Type</th>
                                <td>{{ this.$props.client.business_type }}</td>
                            </tr>
                            <tr>
                                <th>Date of Incorporation</th>
                                <td>{{this.$props.client.incorporation_date }}</td>
                            </tr>
                            <tr>
                                <th>CAC Document URL</th>
                                <td>{{ this.$props.client.cac_document_url }}</td>
                            </tr>
                            <tr>
                                <th>Organization Contact</th>
                                <td>{{ this.$props.client.organization_contact }}</td>
                            </tr>
                            <tr>
                                <th>Organization Email</th>
                                <td>{{ this.$props.client.organization_contact }}</td>
                            </tr>
                            <tr>
                                <th>Organization Contact</th>
                                <td>{{ this.$props.client.organization_email }} </td>
                            </tr>
                            <tr>
                                <th>Webhook URL</th>
                                <td>{{ this.$props.client.webhook_url }} </td>
                            </tr>
                            <tr>
                                <th>Director Name</th>
                                <td>{{ this.$props.client.director_name }} </td>
                            </tr>
                            <tr>
                                <th>Director Contact</th>
                                <td>{{ this.$props.client.director_contact }} </td>
                            </tr>
                            <tr>
                                <th>Director Email</th>
                                <td>{{ this.$props.client.director_email }} </td>
                            </tr>
                            <tr>
                                <th>Director ID Card</th>
                                <td><a download :href="'/storage/director_id_card/'+this.$props.client.director_id_card">Download</a></td>
                            </tr>
                            <tr>
                                <th>Director Passport</th>
                                <td><a download :href="'/storage/director_passport/'+this.$props.client.director_passport">Download</a></td>
                            </tr>

                            </tbody>
                        </table>



                    </div>
                </div>
            </div>
        </div>
    </BreezeAuthenticatedLayout>
</template>


<script>
import BreezeAuthenticatedLayout from '@/Layouts/Authenticated.vue';
import { Head } from '@inertiajs/inertia-vue3';
// import ClientList from '@/Components/ClientList.vue'
export default {
    props: {
        client: Array
    },

    components: {
        BreezeAuthenticatedLayout,

    },
    mounted(){

    }

}

</script>
