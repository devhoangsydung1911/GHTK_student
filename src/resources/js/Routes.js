import FileImport from "./components/FileImport.vue";
import ResultSearch from "./components/ResultSearch.vue";

export default {
    mode: "history",
    routes: [
        {
            path: "/",
            component: FileImport,
            name: "file-import",
        },
        {
            path: "/result-search",
            component: ResultSearch,
            name: "result-search",
        },
    ],
};
