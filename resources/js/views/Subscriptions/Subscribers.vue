<template>
    <div>

        <div class="card mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">ALL SUBSCRIPTIONS</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>NAME</th>
                                <th>EMAIL ADDRESS</th>
                                <th>ACTION</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="subscription in subscriptions" :key="subscriptions.id">
                                <td>{{ subscription.client_name }}</td>
                                <td>{{ subscription.client_email }}</td>
                                <td>
                                    <button class="btn btn-sm btn-primary">
                                        Send Email
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import "datatables.net-dt/js/dataTables.dataTables"
import "datatables.net-dt/css/jquery.dataTables.min.css"
import axios from "axios";

export default {
    name: 'Subscribers',
    data() {
        return {
            subscriptions: {},
            subscriptions: [],
        }
    },

    methods: {
        loadSubscriptions(){
            axios.get('/api/subscription').then(({ data }) => (this.subscriptions = data.data))
        }
    },
    mounted() {
        $('#dataTable').DataTable();
        this.loadSubscriptions();
    }
}
</script>