<template>

    <div class="overflow-x-auto">
        <table class="table w-full">
        <thead>
        <tr>
            <th>#</th>
            <th>Organization Name</th>
            <th>RC Number</th>
            <th>Business Type</th>
            <th>Organization Contact</th>
            <th>Director Contact</th>
            <th>View</th>
        </tr>
        </thead>
        <tbody >
        <tr v-for="(client, index) in this.$props.clients" :key="index">
            <td>{{index + 1}}</td>
            <td>{{ client.organization_name }}</td>
            <td>{{ client.rc_number }}</td>
            <td>{{ client.business_type }}</td>
            <td>{{ client.organization_contact }} </td>
            <td>{{ client.director_contact }}</td>
           <td><Link :href="'client/'+client.id">More Details</Link></td>

        </tr>
        </tbody>
    </table>
    </div>
</template>

<!--id, organization_name, rc_number, country, business_type, incorporation_date, cac_document_url, organization_contact, organization_email, webhook_url, director_name, director_contact, director_email, director_id_card, director_passport, created_at, updated_at-->

<script>
import { Link } from '@inertiajs/inertia-vue3'
    export default {
    components:{
        Link
    },
        props: {
            clients: Array
        },
        data() {
            return {
                clients: null
            }
        },

    }
</script>
