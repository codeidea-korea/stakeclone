import { createIcons, icons } from "lucide";

(function () {
    "use strict";

    // Lucide Icons
    createIcons({
        icons,
        "stroke-width": 3,
        nameAttr: "data-lucide",
    });
    window.lucide = {
        createIcons: createIcons,
        icons: icons,
    };
})();
