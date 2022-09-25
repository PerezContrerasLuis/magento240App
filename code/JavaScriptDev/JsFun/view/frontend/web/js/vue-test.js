define(['vue'],function(Vue){
    'use strict'

    return function(config){
        return new Vue({
            el:'#vue-test',
            data:{
                message : config.message
            }
        })
    }
        
    })