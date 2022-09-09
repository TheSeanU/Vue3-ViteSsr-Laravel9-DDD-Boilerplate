// import { defineAsyncComponent, h, type PropType } from "vue"

// export default defineAsyncComponent({
//   props: ['modelValue'],
//   emits: ['update:modelValue'],

//   setup(props: PropType<[]>, { emit }) {
//     return () =>
//       h(test, {
//         scopedSlots: {default: props => h(props)},
//         modelValue: props.modelValue,
//         'onUpdate:modelValue': (value) => emit('update:modelValue', value)
//       })
//   }
// })