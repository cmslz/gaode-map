<?php

namespace Cmslz\GaodeMap;

use Cmslz\GaodeMap\Exception\MapException;
use Cmslz\GaodeMap\Exception\ServerException;
use GuzzleHttp\Exception\GuzzleException;

class WebServerApi
{
    protected Request $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    /**
     * 地理编码
     * @link https://lbs.amap.com/api/webservice/guide/api/georegeo#geo
     * @param string $address
     * @param array $options
     * @return Response
     * @throws MapException
     * @throws GuzzleException
     * @throws ServerException
     */
    public function geoCodeGeo(string $address, array $options = []): Response
    {
        return $this->request->get('/v3/geocode/geo', array_merge(
            compact('address'),
            $options
        ));
    }

    /**
     * 地理编码
     * @link https://lbs.amap.com/api/webservice/guide/api/georegeo#regeo
     * @param string $location
     * @param array $options
     * @return Response
     * @throws GuzzleException
     * @throws MapException
     * @throws ServerException
     */
    public function geoCodeReGeo(string $location, array $options = []): Response
    {
        return $this->request->get('/v3/geocode/regeo', array_merge(
            compact('location'),
            $options
        ));
    }

    /**
     * 路径规划(步行)
     * @link https://lbs.amap.com/api/webservice/guide/api/direction#walking
     * @param string $origin 出发点
     * @param string $destination 目的地
     * @param array $options
     * @return Response
     * @throws GuzzleException
     * @throws MapException
     * @throws ServerException
     */
    public function directionWalkingV3(string $origin, string $destination, array $options = []): Response
    {
        return $this->request->get('/v3/direction/walking', array_merge(
            compact('origin', 'destination'),
            $options
        ));
    }

    /**
     * 路径规划2.0(步行)
     * @link https://lbs.amap.com/api/webservice/guide/api/newroute#t6
     * @param string $origin 出发点
     * @param string $destination 目的地
     * @param array $options
     * @return Response
     * @throws GuzzleException
     * @throws MapException
     * @throws ServerException
     */
    public function directionWalkingV5(
        string $origin,
        string $destination,
        array $options = []
    ): Response {
        return $this->request->get('/v5/direction/walking', array_merge(
            compact('origin', 'destination'),
            $options
        ));
    }

    /**
     * 路径规划(公交)
     * @link https://lbs.amap.com/api/webservice/guide/api/direction#bus
     * @param string $origin 出发点
     * @param string $destination 目的地
     * @param string|int $city
     * @param array $options
     * @return Response
     * @throws GuzzleException
     * @throws MapException
     * @throws ServerException
     */
    public function directionBusV3(
        string $origin,
        string $destination,
        string|int $city,
        array $options = []
    ): Response {
        return $this->request->get('/v3/direction/transit/integrated', array_merge(
            compact('origin', 'destination', 'city'),
            $options
        ));
    }

    /**
     * 路径规划2.0(公交车)
     * @link https://lbs.amap.com/api/webservice/guide/api/newroute#t8
     * @param string $origin 出发点
     * @param string $destination 目的地
     * @param string|int $city1 起点所在城市
     * @param string|int $city2
     * @param array $options
     * @return Response
     * @throws GuzzleException
     * @throws MapException
     * @throws ServerException
     */
    public function directionBusV5(
        string $origin,
        string $destination,
        string|int $city1,
        string|int $city2,
        array $options = []
    ): Response {
        return $this->request->get('/v5/direction/transit/integrated', array_merge(
            compact('origin', 'destination', 'city1', 'city2'),
            $options
        ));
    }

    /**
     * 路径规划(驾车)
     * @link https://lbs.amap.com/api/webservice/guide/api/direction#driving
     * @param string $origin 出发点
     * @param string $destination 目的地
     * @param string $extensions
     * @param array $options
     * @return Response
     * @throws GuzzleException
     * @throws MapException
     * @throws ServerException
     */
    public function directionDrivingV3(
        string $origin,
        string $destination,
        string $extensions,
        array $options = []
    ): Response {
        return $this->request->get('/v3/direction/driving', array_merge(
            compact('origin', 'destination', 'extensions'),
            $options
        ));
    }

    /**
     * 路径规划2.0(驾车)
     * @link https://lbs.amap.com/api/webservice/guide/api/newroute#t5
     * @param string $origin 出发点
     * @param string $destination 目的地
     * @param array $options
     * @return Response
     * @throws GuzzleException
     * @throws MapException
     * @throws ServerException
     */
    public function directionDrivingV5(
        string $origin,
        string $destination,
        array $options = []
    ): Response {
        return $this->request->get('/v5/direction/driving', array_merge(
            compact('origin', 'destination'),
            $options
        ));
    }

    /**
     * 路径规划(骑行)
     * @link https://lbs.amap.com/api/webservice/guide/api/direction#bicycling
     * @param string $origin 出发点
     * @param string $destination 目的地
     * @param array $options
     * @return Response
     * @throws GuzzleException
     * @throws MapException
     * @throws ServerException
     */
    public function directionBicyclingV4(
        string $origin,
        string $destination,
        array $options = []
    ): Response {
        return $this->request->get('/v4/direction/bicycling', array_merge(
            compact('origin', 'destination'),
            $options
        ));
    }

    /**
     * 路径规划2.0(骑行)
     * @link https://lbs.amap.com/api/webservice/guide/api/newroute#t7
     * @param string $origin 出发点
     * @param string $destination 目的地
     * @param array $options
     * @return Response
     * @throws GuzzleException
     * @throws MapException
     * @throws ServerException
     */
    public function directionBicyclingV5(
        string $origin,
        string $destination,
        array $options = []
    ): Response {
        return $this->request->get('/v5/direction/bicycling', array_merge(
            compact('origin', 'destination'),
            $options
        ));
    }

    /**
     * 路径规划(未来路径规划)
     * @link https://lbs.amap.com/api/webservice/guide/api/direction#etddriving
     * @param string $origin 出发点
     * @param string $destination 目的地
     * @param int $firsttime
     * @param int $interval
     * @param int $count
     * @param array $options
     * @return Response
     * @throws GuzzleException
     * @throws MapException
     * @throws ServerException
     */
    public function directionEtdDrivingV4(
        string $origin,
        string $destination,
        int $firsttime,
        int $interval,
        int $count,
        array $options = []
    ): Response {
        return $this->request->get('/v4/etd/driving', array_merge(
            compact('origin', 'destination', 'firsttime', 'interval', 'count'),
            $options
        ));
    }

    /**
     * 路径规划(距离测量)
     * @link https://lbs.amap.com/api/webservice/guide/api/direction#distance
     * @param string $origins 出发点
     * @param string $destination 目的地
     * @param array $options
     * @return Response
     * @throws GuzzleException
     * @throws MapException
     * @throws ServerException
     */
    public function directionDistanceV3(
        string $origins,
        string $destination,
        array $options = []
    ): Response {
        return $this->request->get('/v3/distance', array_merge(
            compact('origins', 'destination'),
            $options
        ));
    }

    /**
     * 路径规划2.0(电动车)
     * @link https://lbs.amap.com/api/webservice/guide/api/newroute#t8
     * @param string $origin 出发点
     * @param string $destination 目的地
     * @param array $options
     * @return Response
     * @throws GuzzleException
     * @throws MapException
     * @throws ServerException
     */
    public function directionElectrobikeV5(
        string $origin,
        string $destination,
        array $options = []
    ): Response {
        return $this->request->get('/v5/direction/electrobike', array_merge(
            compact('origin', 'destination'),
            $options
        ));
    }

    /**
     * 行政区域查询
     * @link https://lbs.amap.com/api/webservice/guide/api/district
     * @param array $options
     * @return Response
     * @throws GuzzleException
     * @throws MapException
     * @throws ServerException
     */
    public function district(
        array $options = []
    ): Response {
        return $this->request->get('/v3/config/district', $options);
    }

    /**
     * 搜索POI(关键字搜索)
     * @link https://lbs.amap.com/api/webservice/guide/api/search#text
     * @param string $keywords
     * @param string $types
     * @param array $options
     * @return Response
     * @throws GuzzleException
     * @throws MapException
     * @throws ServerException
     */
    public function placeTextV3(
        string $keywords,
        string $types = '',
        array $options = []
    ): Response {
        if (!empty($keywords)) {
            $options['keywords'] = $keywords;
        } elseif (!empty($types)) {
            $options['types'] = $types;
        } else {
            throw new ServerException('keywords 或 types 必须选择其中一个');
        }
        return $this->request->get('/v3/place/text', $options);
    }

    /**
     * 搜索POI2.0(关键字搜索)
     * @link https://lbs.amap.com/api/webservice/guide/api/newpoisearch#t5
     * @param string $keywords
     * @param string $types
     * @param array $options
     * @return Response
     * @throws GuzzleException
     * @throws MapException
     * @throws ServerException
     */
    public function placeTextV5(
        string $keywords,
        string $types = '',
        array $options = []
    ): Response {
        if (!empty($keywords)) {
            $options['keywords'] = $keywords;
        } elseif (!empty($types)) {
            $options['types'] = $types;
        } else {
            throw new ServerException('keywords 或 types 必须选择其中一个');
        }
        return $this->request->get('/v5/place/text', $options);
    }

    /**
     * 搜索POI(周边搜索)
     * @link https://lbs.amap.com/api/webservice/guide/api/search#around
     * @param string $location
     * @param array $options
     * @return Response
     * @throws GuzzleException
     * @throws MapException
     * @throws ServerException
     */
    public function placeAroundV3(
        string $location,
        array $options = []
    ): Response {
        return $this->request->get('/v3/place/around', array_merge(
            compact('location'), $options));
    }

    /**
     * 搜索POI2.0(周边搜索)
     * @link https://lbs.amap.com/api/webservice/guide/api/newpoisearch#t6
     * @param string $location
     * @param array $options
     * @return Response
     * @throws GuzzleException
     * @throws MapException
     * @throws ServerException
     */
    public function placeAroundV5(
        string $location,
        array $options = []
    ): Response {
        return $this->request->get('/v5/place/around', array_merge(
            compact('location'), $options));
    }

    /**
     * 搜索POI(多边形搜索)
     * @link https://lbs.amap.com/api/webservice/guide/api/search#polygon
     * @param string $polygon
     * @param array $options
     * @return Response
     * @throws GuzzleException
     * @throws MapException
     * @throws ServerException
     */
    public function placePolygonV3(
        string $polygon,
        array $options = []
    ): Response {
        return $this->request->get('/v3/place/polygon', array_merge(
            compact('polygon'), $options));
    }

    /**
     * 搜索POI2.0(多边形搜索)
     * @link https://lbs.amap.com/api/webservice/guide/api/newpoisearch#t7
     * @param string $polygon
     * @param array $options
     * @return Response
     * @throws GuzzleException
     * @throws MapException
     * @throws ServerException
     */
    public function placePolygonV5(
        string $polygon,
        array $options = []
    ): Response {
        return $this->request->get('/v5/place/polygon', array_merge(
            compact('polygon'), $options));
    }

    /**
     * 搜索POI(ID查询)
     * @link https://lbs.amap.com/api/webservice/guide/api/search#id
     * @param string|int $id
     * @param array $options
     * @return Response
     * @throws GuzzleException
     * @throws MapException
     * @throws ServerException
     */
    public function placeDetailV3(
        string|int $id,
        array $options = []
    ): Response {
        return $this->request->get('/v3/place/detail', array_merge(
            compact('id'), $options));
    }

    /**
     * 搜索POI(ID查询)
     * @link https://lbs.amap.com/api/webservice/guide/api/newpoisearch#t8
     * @param string|int $id
     * @param array $options
     * @return Response
     * @throws GuzzleException
     * @throws MapException
     * @throws ServerException
     */
    public function placeDetailV5(
        string|int $id,
        array $options = []
    ): Response {
        return $this->request->get('/v5/place/detail', array_merge(
            compact('id'), $options));
    }

    /**
     * 搜索POI(AOI边界查询)
     * @link https://lbs.amap.com/api/webservice/guide/api/search#aoi
     * @param string|int $id
     * @param array $options
     * @return Response
     * @throws GuzzleException
     * @throws MapException
     * @throws ServerException
     */
    public function aoiPolyline(
        string|int $id,
        array $options = []
    ): Response {
        return $this->request->get('/v5/aoi/polyline', array_merge(
            compact('id'), $options));
    }

    /**
     * IP定位
     * @link https://lbs.amap.com/api/webservice/guide/api/ipconfig
     * @param array $options
     * @return Response
     * @throws GuzzleException
     * @throws MapException
     * @throws ServerException
     */
    public function ip(
        array $options = []
    ): Response {
        return $this->request->get('/v3/ip', $options);
    }

    /**
     * 静态地图
     * @link https://lbs.amap.com/api/webservice/guide/api/staticmaps#staticmap
     * @param string|int $zoom
     * @param string $location
     * @param array $options
     * @return Response
     * @throws GuzzleException
     * @throws ServerException
     * @throws Exception\MapException
     */
    public function staticMap(
        string|int $zoom,
        string $location,
        array $options = []
    ): Response {
        return $this->request->get('/v3/staticmap', array_merge(
            compact('zoom', 'location'), $options), ['result_type' => Response::RESULT_STRING]);
    }

    /**
     * 坐标转换
     * @link https://lbs.amap.com/api/webservice/guide/api/convert
     * @param string $locations
     * @param array $options
     * @return Response
     * @throws GuzzleException
     * @throws MapException
     * @throws ServerException
     */
    public function convert(
        string $locations,
        array $options = []
    ): Response {
        return $this->request->get('/v3/assistant/coordinate/convert', array_merge(
            compact('locations'), $options));
    }

    /**
     * 天气查询
     * @link https://lbs.amap.com/api/webservice/guide/api/weatherinfo#weatherinfo
     * @param string $city
     * @param array $options
     * @return Response
     * @throws GuzzleException
     * @throws MapException
     * @throws ServerException
     */
    public function weatherInfo(
        string $city,
        array $options = []
    ): Response {
        return $this->request->get('/v3/weather/weatherInfo', array_merge(
            compact('city'), $options));
    }

    /**
     * 输入提示
     * @link https://lbs.amap.com/api/webservice/guide/api/inputtips#inputtips
     * @param string $keywords
     * @param array $options
     * @return Response
     * @throws GuzzleException
     * @throws MapException
     * @throws ServerException
     */
    public function inputTips(
        string $keywords,
        array $options = []
    ): Response {
        return $this->request->get('/v3/assistant/inputtips', array_merge(
            compact('keywords'), $options));
    }

    /**
     * 轨迹纠偏
     * @link https://lbs.amap.com/api/webservice/guide/api/grasproad#t4
     * @param array $data
     * @return Response
     * @throws GuzzleException
     * @throws MapException
     * @throws ServerException
     */
    public function driving(
        array $data
    ): Response {
        return $this->request->post('/v4/grasproad/driving', $data);
    }


}