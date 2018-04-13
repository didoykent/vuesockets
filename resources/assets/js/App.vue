<template>

<v-app>


  <v-container grid-list-md text-xs-center>
     <v-layout row wrap>


       <v-flex xs12 sm3 class="scrollable">


       <v-list subheader>
         <v-subheader>Contact Lists</v-subheader>
         <v-list-tile avatar v-for="item in users" :key="item.title" @click="">
           <v-list-tile-avatar>
             <img :src="item.avatar">
           </v-list-tile-avatar>
           <v-list-tile-content>
             <v-list-tile-title v-html="item.title"></v-list-tile-title>
           </v-list-tile-content>
           <v-list-tile-action>
             <v-icon :color="item.active ? 'teal' : 'grey'">chat_bubble</v-icon>
           </v-list-tile-action>
         </v-list-tile>
       </v-list>


         </v-flex>



<v-flex xs12 sm9 >

        <v-subheader dark>Chat App</v-subheader>
        <v-container fluid>
          <v-layout row>
            <v-flex xs12 md12>


<div  class="suggested">
              <v-list :scroll-off-screen="true">
           <template v-for="(item, index) in items" >
             <v-subheader v-if="item.header" :key="item.header">{{ item.header }}</v-subheader>
             <v-divider v-else-if="item.divider" :inset="item.inset" :key="index"></v-divider>
             <v-list-tile avatar v-else :key="item.title" @click="">
               <v-list-tile-avatar>
                 <img :src="item.avatar">
               </v-list-tile-avatar>
               <v-list-tile-content>
                 <v-list-tile-title v-html=""></v-list-tile-title>
                 <span class='text--primary'>Ali Connors<v-list-tile-sub-title v-html="item.subtitle"></v-list-tile-sub-title></span>
               </v-list-tile-content>
             </v-list-tile>
           </template>
         </v-list>
         </div>





    <v-layout row wrap>
      <v-flex xs12 >
        <v-text-field solo label="Type a message" v-model="message" @keyup.enter = "sendMessage"></v-text-field>
      </v-flex>

    </v-layout>


  </v-flex>

</v-layout>



        </v-container>






</v-flex>


   </v-layout>

     </v-container>

</v-app>

</template>




<script>





import axios from 'axios'


export default {


data(){


return {

  data: [],
    busy: false,

  items: [
           { header: 'Today' },
           { avatar: 'https://scontent.ficn2-1.fna.fbcdn.net/v/t1.0-1/p160x160/29468236_901369833374211_8734349036217171968_n.jpg?_nc_cat=0&oh=f8f7428a3e9e807d58b3ef91ef215062&oe=5B760837', title: 'Brunch this weekend?', subtitle: "  I'll be in your neighborhood doing errands this weekend. Do you want to hang out?" },
           { divider: true, inset: true },
           { avatar: '/static/doc-images/lists/2.jpg', title: 'Summer BBQ <span class="grey--text text--lighten-1">4</span>', subtitle: " Wish I could come, but I'm out of town this weekend." },
           { divider: true, inset: true },
           { avatar: '/static/doc-images/lists/3.jpg', title: 'Oui oui', subtitle: " Do you have Paris recommendations? Have you ever been?" },
           { divider: true, inset: true },
           { avatar: '/static/doc-images/lists/4.jpg', title: 'Birthday gift', subtitle: " Have any ideas about what we should get Heidi for her birthday?" },
           { divider: true, inset: true },
           { avatar: '/static/doc-images/lists/5.jpg', title: 'Recipe to try', subtitle: " We should eat this: Grate, Squash, Corn, and tomatillo Tacos." },
           { avatar: '/static/doc-images/lists/1.jpg', title: 'Brunch this weekend?', subtitle: "  I'll be in your neighborhood doing errands this weekend. Do you want to hang out?" },
           { divider: true, inset: true },
           { avatar: '/static/doc-images/lists/2.jpg', title: 'Summer BBQ <span class="grey--text text--lighten-1">4</span>', subtitle: " Wish I could come, but I'm out of town this weekend." },
           { divider: true, inset: true },
           { avatar: '/static/doc-images/lists/3.jpg', title: 'Oui oui', subtitle: " Do you have Paris recommendations? Have you ever been?" },
           { divider: true, inset: true },
           { avatar: '/static/doc-images/lists/4.jpg', title: 'Birthday gift', subtitle: " Have any ideas about what we should get Heidi for her birthday?" },
           { divider: true, inset: true },
           { avatar: '/static/doc-images/lists/5.jpg', title: 'Recipe to try', subtitle: " We should eat this: Grate, Squash, Corn, and tomatillo Tacos." },
           { avatar: '/static/doc-images/lists/1.jpg', title: 'Brunch this weekend?', subtitle: "  I'll be in your neighborhood doing errands this weekend. Do you want to hang out?" },
           { divider: true, inset: true },
           { avatar: '/static/doc-images/lists/2.jpg', title: 'Summer BBQ <span class="grey--text text--lighten-1">4</span>', subtitle: " Wish I could come, but I'm out of town this weekend." },
           { divider: true, inset: true },
           { avatar: '/static/doc-images/lists/3.jpg', title: 'Oui oui', subtitle: " Do you have Paris recommendations? Have you ever been?" },
           { divider: true, inset: true },
           { avatar: '/static/doc-images/lists/4.jpg', title: 'Birthday gift', subtitle: " Have any ideas about what we should get Heidi for her birthday?" },
           { divider: true, inset: true },
           { avatar: '/static/doc-images/lists/5.jpg', title: 'Recipe to try', subtitle: " We should eat this: Grate, Squash, Corn, and tomatillo Tacos." },
           { avatar: '/static/doc-images/lists/1.jpg', title: 'Brunch this weekend?', subtitle: "  I'll be in your neighborhood doing errands this weekend. Do you want to hang out?" },
           { divider: true, inset: true },
           { avatar: '/static/doc-images/lists/2.jpg', title: 'Summer BBQ <span class="grey--text text--lighten-1">4</span>', subtitle: " Wish I could come, but I'm out of town this weekend." },
           { divider: true, inset: true },
           { avatar: '/static/doc-images/lists/3.jpg', title: 'Oui oui', subtitle: " Do you have Paris recommendations? Have you ever been?" },
           { divider: true, inset: true },
           { avatar: '/static/doc-images/lists/4.jpg', title: 'Birthday gift', subtitle: " Have any ideas about what we should get Heidi for her birthday?" },
           { divider: true, inset: true },
           { avatar: '/static/doc-images/lists/5.jpg', title: 'Recipe to try', subtitle: " We should eat this: Grate, Squash, Corn, and tomatillo Tacos." }

         ],

         users: [
         { active: true, title: 'Priscilla', avatar: 'https://scontent.ficn2-1.fna.fbcdn.net/v/t1.0-9/26734343_1963222710598716_4444436793604184869_n.jpg?_nc_cat=0&oh=7d16dfb49268afd4c548d37a9f4a6f77&oe=5B373C24' },
         { active: true, title: 'Ranee Carlson', avatar: '/static/doc-images/lists/2.jpg' },
         { title: 'Cindy Baker', avatar: '/static/doc-images/lists/3.jpg' },
         { title: 'Ali Connors', avatar: '/static/doc-images/lists/4.jpg' },
         { active: true, title: 'Jason Oner', avatar: '/static/doc-images/lists/1.jpg' },
         { active: true, title: 'Ranee Carlson', avatar: '/static/doc-images/lists/2.jpg' },
         { title: 'Cindy Baker', avatar: '/static/doc-images/lists/3.jpg' },
         { title: 'Ali Connors', avatar: '/static/doc-images/lists/4.jpg' },
         { active: true, title: 'Jason Oner', avatar: '/static/doc-images/lists/1.jpg' },
         { active: true, title: 'Ranee Carlson', avatar: '/static/doc-images/lists/2.jpg' },
         { title: 'Cindy Baker', avatar: '/static/doc-images/lists/3.jpg' },
         { title: 'Ali Connors', avatar: '/static/doc-images/lists/4.jpg' },
         { active: true, title: 'Jason Oner', avatar: '/static/doc-images/lists/1.jpg' },
         { active: true, title: 'Ranee Carlson', avatar: '/static/doc-images/lists/2.jpg' },
         { title: 'Cindy Baker', avatar: '/static/doc-images/lists/3.jpg' },
         { title: 'Ali Connors', avatar: '/static/doc-images/lists/4.jpg' }
       ],
       users2: [
         { title: 'Travis Howard', avatar: '/static/doc-images/lists/5.jpg' }
       ],

       message: '',



         messages: [

           { header: 'Today' },
           { avatar: 'https://scontent.ficn2-1.fna.fbcdn.net/v/t1.0-1/p160x160/29468236_901369833374211_8734349036217171968_n.jpg?_nc_cat=0&oh=f8f7428a3e9e807d58b3ef91ef215062&oe=5B760837', title: 'Brunch this weekend?', subtitle: "  I'll be in your neighborhood doing errands this weekend. Do you want to hang out?" },
           { divider: true, inset: true }

         ]

}

},




beforeMount(){



var vm = this

vm.$socket.on('sendMessage', function(data){

vm.items.push({'avatar' : 'https://scontent.ficn2-1.fna.fbcdn.net/v/t1.0-1/p160x160/29468236_901369833374211_8734349036217171968_n.jpg?_nc_cat=0&oh=f8f7428a3e9e807d58b3ef91ef215062&oe=5B760837', 'title': 'Brunch this weekend?', 'subtitle': data})
vm.items.push({'divider': true, 'inset': true})

vm.scrollToEnd()
console.log(vm.messages)
}.bind(this))





},

methods:{


getTestData(){

axios.get('api/testData').then(function(response){

console.log('successFul')

}).catch(function(error){


  console.log(error)
})

},





sendMessage(){

var vm  = this

  vm.$socket.emit('latestMessage', vm.message )

},

scrollToEnd () {
  var vm = this
        var container = vm.$el.querySelector('.suggested > .list ')
        container.scrollTop = container.scrollHeight


      },

      loadMore: function() {
      this.busy = true;

      setTimeout(() => {
        for (var i = 0, j = 10; i < j; i++) {
          this.data.push({ name: count++ });
        }
        this.busy = false;
      }, 1000);
    },



sockets:{

  message(data){

    console.log('myData', data)

  }
}
}
}



</script>

<style>



.suggested > .list {
  background:#EEEEEE;

   overflow-y: auto;
height: calc(100vh - 9.5rem);


transform: translateY(1%);

}


.scrollable {
   overflow-y: auto;
   height: 100vh;
 }



</style>
