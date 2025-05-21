import { defineStore } from "pinia";

export const useCustomerStore = defineStore("customer", () => {
    const customers = ref([]);

    return { customers };
});
