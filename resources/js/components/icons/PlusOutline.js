import { Svg } from "../../Component";

export const PlusOutline = (width = 30, height = 30) => {
    return Svg(
        'svg',
        {
            fill: 'currentColor',
            viewBox: '0 0 24 24',
            width: width,
            height: height
        },
        Svg(
            'g',
            {
                "data-name": 'plus'
            },
            Svg(
                'path',
                {
                    d: 'M19 11h-6V5a1 1 0 0 0-2 0v6H5a1 1 0 0 0 0 2h6v6a1 1 0 0 0 2 0v-6h6a1 1 0 0 0 0-2z'
                }
            ),
        )
    );
}
