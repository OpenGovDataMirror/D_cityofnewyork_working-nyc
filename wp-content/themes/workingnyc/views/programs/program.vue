<template>
  <article class="c-card">
    <header class="c-card__header">
      <a class="c-card__header-link" :data-js="'post-' + post.id" :href="post.link">
        <h3 class="c-card__title" v-html="post.context.program_plain_language_title"></h3>
      </a>

      <p class="c-card__subtitle text-alt mb-1">
        <b data-program="title" v-html="post.context.program_title"></b>
        <span> {{ strings.BY }} </span>
        <span v-html="post.context.program_agency"></span>
      </p>
    </header>

    <div class="c-card__body">
      <p class="c-card__status flex items-center" v-if="post.status">
        <mark class="badge mie-2" data-program="recruiting" v-if="post.context.status.recruiting">
          {{ post.context.status.recruiting.name }}<span class="sr-only">.</span>
        </mark>

        <span class="flex mie-2" v-if="post.context.status.disability" :title="post.context.status.disability.name">
          <svg class="icon text-em" role="img">
            <title v-html="post.context.status.disability.name"></title>

            <use href="#icon-wnyc-accessible"></use>
          </svg>
        </span> <span v-if="post.context.status.disability" class="sr-only">&nbsp;</span>

        <span class="flex me-2" v-if="post.context.status.language" :title="post.context.status.language.name">
          <svg class="icon-wnyc-ui text-em" role="img">
            <title v-html="post.context.status.language.name"></title>

            <use href="#icon-wnyc-translate"></use>
          </svg>
        </span>
      </p>

      <div class="c-card__summary">
        <p>
          <span v-if="post.context.intro" v-html="post.context.intro"></span>
          <span v-if="post.context.populations" v-html="post.context.populations"></span>
        </p>
      </div>

      <ul class="c-card__features">
        <li class="flex items-center" v-if="post.context.services">
          <svg class="icon-wnyc-ui flex-shrink-0 mie-1" role="img">
            <title>{{ strings.SERVICES }}</title>

            <use href="#feather-award"></use>
          </svg>

          <span v-html="post.context.services"></span>
        </li>

        <li class="flex items-center" v-if="post.context.schedule">
          <svg class="icon-wnyc-ui flex-shrink-0 mie-1" role="img">
            <title>{{ strings.SCHEDULE }}</title>

            <use href="#feather-calendar"></use>
          </svg>

          <span v-html="post.context.schedule"></span>
        </li>
      </ul>

      <a class="c-card__cta" :href="post.link">
        <svg aria-hidden="true" class="icon-wnyc-ui rtl:flip">
          <use href="#feather-arrow-left"></use>
        </svg>

        <span v-html="strings.LEARN_MORE_ABOUT.replace('{{ program }}', post.context.program_plain_language_title)"></span>

        <svg aria-hidden="true" class="icon-wnyc-ui rtl:flip">
          <use href="#feather-arrow-right"></use>
        </svg>
      </a>

      <details v-if="post.raw">
        <summary>Raw</summary>

        <pre tabindex="-1">{{ post.raw }}</pre>
      </details>
    </div>
  </article>
</template>

<script>
  export default {
    props: {
      post: {
        type: Object
      },
      strings: {
        type: Object
      }
    }
  };
</script>
