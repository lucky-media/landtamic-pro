import Splide from "@splidejs/splide";

export default function Slider(id, config) {
    const defaultOptions = {
        flickPower: 500,
        perPage: 1,
        perMove: 1,
        gap: "24px",
        rewind: true,
        arrows: false,
        pagination: true,
    };

    return {
        init() {
            return new Splide(`#${id}`, {
                ...defaultOptions,
                ...config,
            }).mount();
        },
    };
}
