<template>



  <v-flex xs12 sm9 >

          <v-subheader dark>Chat App</v-subheader>
          <v-container fluid>
            <v-layout row>
              <v-flex xs12 md12>


                <v-list >
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
  




      <v-layout row wrap>
        <v-flex xs12 >
          <v-text-field solo label="Type a message" v-model="message" @keyup.enter = "sendMessage"></v-text-field>
        </v-flex>

      </v-layout>


    </v-flex>

  </v-layout>



          </v-container>






  </v-flex>
</template>
