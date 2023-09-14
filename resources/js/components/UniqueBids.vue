<template>
    <span>{{ uniqueBids + declension() }}</span>
</template>

<script>

export default {
    props: ['lot', 'bid', 'unique'],

    data() {
        return {
            maxBid: this.bid,
            lotId: this.lot,
            uniqueBids: this.unique,
        }
    },
    methods: {
        declension() {
            return this.uniqueBids === 1 ? ' bid' : ' bids'
        }
    },
    created() {
        Echo.channel('Bids')
            .listen('BidEvent', (message) => {
                if (message.lot_id === this.lotId) {
                    this.uniqueBids = message.unique_bids
                }
            });
    }
}
</script>
