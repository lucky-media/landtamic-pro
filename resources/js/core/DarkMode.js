const DarkMode = () => ({
    isDarkMode: false,

    init() {
        if (
            localStorage.theme === "dark" ||
            (!("theme" in localStorage) &&
                window.matchMedia("(prefers-color-scheme: dark)").matches)
        ) {
            this.isDarkMode = true;
        } else {
            this.isDarkMode = false;
        }
    },

    toggle() {
        if (localStorage.theme === "dark") {
            localStorage.theme = "light";
            document.documentElement.classList.remove("dark");
            this.isDarkMode = false;
        } else {
            localStorage.theme = "dark";
            document.documentElement.classList.add("dark");
            this.isDarkMode = true;
        }
    },
});

export default DarkMode;
