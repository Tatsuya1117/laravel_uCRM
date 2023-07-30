<!-- formCreateコンポーネント -->
<script setup>
  import { reactive } from "vue";
  import { Inertia } from "@inertiajs/inertia";

  /** バリデーションを追加 */
  defineProps({
    errors: Object
  })

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
    <div v-if="errors.title">{{ errors.title }}</div><br />
    <input type="text" name="content" v-model="form.content">
    <div v-if="errors.content">{{ errors.content }}</div><br />
    <button>送信</button>
  </form>
</template>
