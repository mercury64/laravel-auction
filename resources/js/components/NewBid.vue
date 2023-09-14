<template>
    <span>
         ${{ maxBid }}
    </span>
</template>

<script>

export default {
    props: ['lot', 'bid'],
    
    data() {
        return {
            maxBid: this.bid,
            lotId: this.lot,
        }
    },
    created() {
        Echo.channel('Bids')
            .listen('BidEvent', (message) => {
            if (message.lot_id === this.lotId) {
                this.maxBid = message.bid_price
            }
            });

    },
}
</script>
