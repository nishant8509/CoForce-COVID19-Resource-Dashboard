// console.log("hello world")
new Vue({
    el: "#root",
    data:{
        title: "COVID19 USSD HELPDESK",
        orders:[
            {name:"Nishant mishra", description:"ration", address:"civil lines, street no 18", telephone:"08082092000", open:true},
            {name:"piyush bansal", description:"medicines", address:"durgapuri east", telephone:"08082818700", open:true}
        ]
    },
    created(){
        var pusher = new Pusher('a03cc380cf04e1bce05e',{
            cluster:'ap2',
            encrypted:true
        })
        var channel = pusher.subscribe('orders')
        channel.bind('customerOrder', (data) => {
            console.log(data)
            this.orders.push(data)
        })
    },
    methods:{
        // close completed order
        close(orderToClose){
            if ( confirm('Are you sure you want to close the Service?') === true){
                this.orders = this.orders.map(order => {
                    if(order.name !== orderToClose.name && order.description !== orderToClose.description){
                        return order;
                    }
                    const change = {
                        open: !order.open
                    }
                    return change;
                })
            } 
        }
    }
})