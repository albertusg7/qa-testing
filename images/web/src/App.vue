<template>
  <wj-input-number />
  <button v-wjTooltip="{ tooltip: 'Some hint', position: 'Right' }">
    Click
  </button>
  <wj-input-mask mask="(999-999)" value="val" wj-model-property="rawValue">
  </wj-input-mask>
  <wj-input-time> </wj-input-time>
</template>

<script>
import { WjTooltip } from "@grapecity/wijmo.vue2.core";
import { WjInputNumber } from "@grapecity/wijmo.vue2.input";
import { WjInputMask } from "@grapecity/wijmo.vue2.input";
import { WjInputTime } from "@grapecity/wijmo.vue2.input";

export default {
  components: {
    WjInputNumber,
    WjInputMask,
    WjInputTime,
  },
  directives: {
    WjTooltip,
  },
};

</script>