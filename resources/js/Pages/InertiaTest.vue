<!-- Linkコンポーネントの例 -->
<script setup>
  import { ref } from "vue"; /** リアクティブなデータにする */
  import { Link } from '@inertiajs/inertia-vue3';

  const newTitle = ref("");
  const newContent = ref("");
</script>

<template>
  <div class="test">
    <div class="test__content">
      <a class="test__content__single" href="/">aタグ経由です。</a><br />
      <Link class="test__content__single" href="/">リンク経由です。</Link><br />
      <Link
        class="test__content__single"
        :href="route('inertia.index')"
      >
        名前付きルートの確認
      </Link><br />
      <Link
        class="test__content__single"
        :href="route('inertia.show', {id: 1})"
      >
        ルートパラメーターのテストです。
      </Link><br />
    <div class="mb-8"></div>

    <input type="text"
      name="newTitle"
      v-model="newTitle"
    >
      {{ newTitle }}
    <br />
    <input
      type="text"
      name="newContent"
      v-model="newContent"
    >
      {{ newContent }}
    <br />
    <Link
      as="button"
      method="post"
      :href="route('inertia.store')"
      :data="{ title: newTitle, content: newContent}"
    >
      DB保存テスト
    </Link>
    </div>
  </div>
</template>

<style lang="scss">
  .test {
    margin: 0 auto;
    width: 100%;

    &__content {
      padding: 1rem;

      &__single {
        margin-bottom: 1rem;
      }
    }
  }
</style>
