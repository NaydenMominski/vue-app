<template>
  <div>
    <p>test</p>
    <form
      method="POST"
      action="/projects"
      @submit.prevent="onSubmit"
      @keydown="form.errors.clear($event.target.name)"
    >
      <div class="control">
        <label for="name" class="label">Project Name:</label>

        <input type="text" id="name" name="name" class="input" v-model="form.name">

        <span
          class="help is-danger"
          v-if="form.errors.has('name')"
          v-text="form.errors.get('name')"
        ></span>
      </div>
      <div class="control">
        <label for="description" class="label">Project Description:</label>

        <input
          type="text"
          id="description"
          name="description"
          class="input"
          v-model="form.description"
        >

        <span
          class="help is-danger"
          v-if="form.errors.has('description')"
          v-text="form.errors.get('description')"
        ></span>
      </div>

      <div class="control">
        <button class="button is-primary" :disabled="form.errors.any()">Create</button>
      </div>
    </form>
    <dir>etst</dir>
  </div>
  <!-- <div>
    <div>test</div>
  </div>-->
</template>

<script>
// import Form from "../utilities/Form.js";
export default {
  mounted() {
    console.log("Component mounted.");
  },
  data: {
    form: new Form({
      name: "",
      description: ""
    })
  },

  methods: {
    onSubmit() {
      this.form
        .post("/projects")
        .then(response => alert("Wahoo!"))
        .catch(errors => console.log(errors));
    }
  }
};
</script>
