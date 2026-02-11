type RouteMap = Record<string, string>;

const routeMap: RouteMap =
    typeof window !== 'undefined' ? ((window as any).brixcapRoutes ?? {}) : {};

export const appRoute = (key: string, fallback: string): string => {
    return routeMap[key] ?? fallback;
};
