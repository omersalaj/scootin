<template>
    <div class="overflow-x-auto relative">
        <h3 class="text-white">Scootin by Omer Salaj</h3>
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="py-3 px-6">
                    Name
                </th>
                <th scope="col" class="py-3 px-6">
                    Description
                </th>
                <th scope="col" class="py-3 px-6">
                    Status
                </th>
                <th scope="col" class="py-3 px-6">
                    Lat
                </th>
                <th scope="col" class="py-3 px-6">
                    Lng
                </th>
                <th scope="col" class="py-3 px-6">
                    Distance traveled
                </th>
            </tr>
            </thead>
            <tbody>

            <tr v-for="item in items" v-bind:key="item.uuid"
                class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 bg-blend-color"
                :class="item.blinkClass">
                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    <div class="box-border h-5 w-5 p-4 border-4"
                         :style="{ 'background-color': item.color }"></div>
                    <span>{{ item.name }}</span>
                </th>
                <td class="py-4 px-6">
                    {{ item.description.substring(0, 15) }} ...
                </td>
                <td class="py-4 px-6">
                    {{ item.latest_point?.status }}
                </td>
                <td class="py-4 px-6">
                    {{ item.latest_point?.lat }}
                </td>

                <td class="py-4 px-6">
                    {{ item.latest_point?.lng }}
                </td>
                <td class="py-4 px-6">
                    {{ item.distance_traveled }} Mm
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
export default {
    data() {
        return {
            items: [],
            highlightTimeout: 2000
        }
    },
    methods: {
        onListen: function (data, blinkClass) {
            console.log(data);
            data.blinkClass = blinkClass;

            let that = this;
            let position = that.updateItemInList(data);
            this.blinkRow(position, that.highlightTimeout);
        },
        blinkRow: function (position, duration) {
            let that = this;
            setTimeout(function () {
                that.items[position].blinkClass = '';
            }, duration);
        },
        updateItemInList: function (data) {
            for (let i = 0; i < this.items.length; i++) {
                if (this.items[i].uuid === data.uuid) {
                    this.items[i] = data;
                    return i;
                }
            }
        },
        subscribeToStartChannel: function () {
            let that = this;
            Echo.channel('start').listen('TripBeganEvent', (event) => {
                that.onListen(event, 'sepia');
            });
        },
        subscribeToStopChannel: function () {
            let that = this;
            Echo.channel('stop').listen('TripEndedEvent', (event) => {
                that.onListen(event, 'brightness-150');
            });
        }

    },
    mounted() {
        let that = this;

        that.subscribeToStartChannel();
        that.subscribeToStopChannel();

        axios.get('/api/v1/scooters')
            .then(function ({data}) {
                that.items = data;
            })
    }
}
</script>
