<template>

<div class="col-md-8">
    <div class="card">
        <div class="card-header">Skills</div>
        <div class="card-body">
        <div v-for="(input,i) in inputs" :key="i" class="d-flex p-0 mb-2">
            <div class="col-10 me-2">
                <input placeholder="Javascript" type="text" name="skills[]" v-model="inputs[i]" class="form-control">
            </div>
            <div class="col-2">
                <button class="btn btn-danger" @click.prevent="inputs.splice(i,1)">Delete</button>
            </div>
        </div>
        <div>
            <button class="btn btn-primary ms-2" @click.prevent="inputs.push('')" >Add</button>
        </div>
        </div>
    </div>
</div>

</template>

<script>
  export default {
    props:{
        skills:{
            type: Array,
            default:()=>([]),
        }
    },
    mounted() {
      console.log('Component mounted.')
    },
    data(){
        return{
            inputs: this.skills,
        }
    },
    methods:{
     
    }
  }
</script>
