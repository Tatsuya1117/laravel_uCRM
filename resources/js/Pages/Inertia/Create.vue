<!-- formCreateコンポーネント -->
<script setup>
  import { reactive } from "vue";
  import { Inertia } from "@inertiajs/inertia";
  /** フォームに入力される値をリアクティブにする */
  const form = reactive({
    title: null,
    content: null,
  })
  /** フォーム送信が実行された時に以下の関数を実行してサーバーに送信する */
  const submitFunction = () => {
    Inertia.post("/inertia", form)
  }
</script>

<template>
  <form @submit.prevent="submitFunction">
    <input type="text" name="title" v-model="form.title"><br />
    <input type="text" name="content" v-model="form.content">
    <button>送信</button>
  </form>
</template>
