import { Svg } from "../../Component";

export const MinusCircleOutline = (width = 30, height = 30) => {
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
                "data-name": 'minus-circle'
            }, [
            Svg(
                'path',
                {
                    d: 'M12 2a10 10 0 1 0 10 10A10 10 0 0 0 12 2zm0 18a8 8 0 1 1 8-8 8 8 0 0 1-8 8z'
                }
            ),
            Svg(
                'path',
                {
                    d: 'M15 11H9a1 1 0 0 0 0 2h6a1 1 0 0 0 0-2z'
                },
            )
        ])
    );
};
