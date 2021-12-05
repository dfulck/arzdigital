var svgMapDataGPD = {
  data: {
      gdp: {
          name: 'تولید ناخالص داخلی سرانه',
          format: '{0} دلار',
          thousandSeparator: ','
      },
      change: {
          name: 'تغییرات در 1سال',
          format: '{0} %'
      },
      gdpAdjusted: {
          name: 'برابری قدرت خرید',
          format: '{0} دلار',
          thousandSeparator: ',',
          thresholdMax: 60000,
          thresholdMin: 1000
      },
      changeAdjusted: {
          name: 'تغییرات در 2سال',
          format: '{0} %'
      }
  },
  applyData: 'gdpAdjusted',
  values: {
    AF: {
        method: 'POST',
      link: '/data/world/AF',
      linkTarget: '_blank',
      gdp: 587,
      change: 4.73,
      linkTarget: '_blank',
      gdpAdjusted: 1958,
      changeAdjusted: 0.02
    },
    AL: {
        method: 'POST',
      link: '/data/world/AL',
      linkTarget: '_blank',
      gdp: 4583,
      change: 11.09,
      linkTarget: '_blank',
      gdpAdjusted: 12507,
      changeAdjusted: 4.04
    },
    DZ: {
        method: 'POST',
      link: '/data/world/DZ',
      linkTarget: '_blank',
      gdp: 4293,
      change: 10.01,
      linkTarget: '_blank',
      gdpAdjusted: 15237,
      changeAdjusted: 0.33
    },
    AO: {
        method: 'POST',
      link: '/data/world/AO',
      linkTarget: '_blank',
      gdp: 4408,
      change: 26.49,
      linkTarget: '_blank',
      gdpAdjusted: 6753,
      changeAdjusted: -2.56
    },
    AG: {
        method: 'POST',
      link: '/data/world/AG',
      linkTarget: '_blank',
      gdp: 16702,
      change: 3.26,
      linkTarget: '_blank',
      gdpAdjusted: 26231,
      changeAdjusted: 2.15
    },
    AR: {
        method: 'POST',
      link: '/data/world/AR',
      linkTarget: '_blank',
      gdp: 14467,
      change: 13.83,
      linkTarget: '_blank',
      gdpAdjusted: 20876,
      changeAdjusted: 1.77
    },
    AM: {
        method: 'POST',
      link: '/data/world/AM',
      linkTarget: '_blank',
      gdp: 3861,
      change: 9.22,
      linkTarget: '_blank',
      gdpAdjusted: 9456,
      changeAdjusted: 7.33
    },
    AU: {
        method: 'POST',
      link: '/data/world/AU',
      linkTarget: '_blank',
      gdp: 55707,
      change: 7.39,
      linkTarget: '_blank',
      gdpAdjusted: 50334,
      changeAdjusted: 0.97
    },
    AT: {
        method: 'POST',
      link: '/data/world/AT',
      linkTarget: '_blank',
      gdp: 47290,
      change: 5.72,
      linkTarget: '_blank',
      gdpAdjusted: 49869,
      changeAdjusted: 2.66
    },
    AZ: {
        method: 'POST',
      link: '/data/world/AZ',
      linkTarget: '_blank',
      gdp: 4141,
      change: 6.29,
      linkTarget: '_blank',
      gdpAdjusted: 17492,
      changeAdjusted: -0.91
    },
    BS: {
        method: 'POST',
      link: '/data/world/BS',
      linkTarget: '_blank',
      gdp: 31255,
      change: 2.21,
      linkTarget: '_blank',
      gdpAdjusted: 31139,
      changeAdjusted: 0.31
    },
    BH: {
        method: 'POST',
      link: '/data/world/BH',
      linkTarget: '_blank',
      gdp: 24029,
      change: 6.32,
      linkTarget: '_blank',
      gdpAdjusted: 48505,
      changeAdjusted: 1.02
    },
    BD: {
        method: 'POST',
      link: '/data/world/BD',
      linkTarget: '_blank',
      gdp: 1602,
      change: 9.79,
      linkTarget: '_blank',
      gdpAdjusted: 4211,
      changeAdjusted: 6.1
    },
    BB: {
        method: 'POST',
      link: '/data/world/BB',
      linkTarget: '_blank',
      gdp: 17859,
      change: 7.83,
      linkTarget: '_blank',
      gdpAdjusted: 18664,
      changeAdjusted: 0.64
    },
    BY: {
        method: 'POST',
      link: '/data/world/BY',
      linkTarget: '_blank',
      gdp: 5760,
      change: 14.69,
      linkTarget: '_blank',
      gdpAdjusted: 18931,
      changeAdjusted: 2.52
    },
    BE: {
        method: 'POST',
      link: '/data/world/BE',
      linkTarget: '_blank',
      gdp: 43582,
      change: 5.3,
      linkTarget: '_blank',
      gdpAdjusted: 46553,
      changeAdjusted: 1.13
    },
    BZ: {
        method: 'POST',
      link: '/data/world/BZ',
      linkTarget: '_blank',
      gdp: 4806,
      change: -0.64,
      linkTarget: '_blank',
      gdpAdjusted: 8324,
      changeAdjusted: -1.35
    },
    BJ: {
        method: 'POST',
      link: '/data/world/BJ',
      linkTarget: '_blank',
      gdp: 830,
      change: 4.92,
      linkTarget: '_blank',
      gdpAdjusted: 2277,
      changeAdjusted: 3.46
    },
    BT: {
        method: 'POST',
      link: '/data/world/BT',
      linkTarget: '_blank',
      gdp: 2903,
      change: 8.01,
      linkTarget: '_blank',
      gdpAdjusted: 8744,
      changeAdjusted: 4.82
    },
    BO: {
        method: 'POST',
      link: '/data/world/BO',
      linkTarget: '_blank',
      gdp: 3353,
      change: 7.3,
      linkTarget: '_blank',
      gdpAdjusted: 7547,
      changeAdjusted: 2.73
    },
    BA: {
        method: 'POST',
      link: '/data/world/BA',
      linkTarget: '_blank',
      gdp: 5149,
      change: 7.04,
      linkTarget: '_blank',
      gdpAdjusted: 12724,
      changeAdjusted: 2.6
    },
    BW: {
        method: 'POST',
      link: '/data/world/BW',
      linkTarget: '_blank',
      gdp: 7877,
      change: 8.34,
      linkTarget: '_blank',
      gdpAdjusted: 17828,
      changeAdjusted: 0.38
    },
    BR: {
        method: 'POST',
      link: '/data/world/BR',
      linkTarget: '_blank',
      gdp: 9895,
      change: 13.74,
      linkTarget: '_blank',
      gdpAdjusted: 15602,
      changeAdjusted: 0.23
    },
    BN: {
        method: 'POST',
      link: '/data/world/BN',
      linkTarget: '_blank',
      gdp: 29712,
      change: 10.31,
      linkTarget: '_blank',
      gdpAdjusted: 78196,
      changeAdjusted: -0.7
    },
    BG: {
        method: 'POST',
      link: '/data/world/BG',
      linkTarget: '_blank',
      gdp: 8064,
      change: 7.58,
      linkTarget: '_blank',
      gdpAdjusted: 21687,
      changeAdjusted: 4.23
    },
    BF: {
        method: 'POST',
      link: '/data/world/BF',
      linkTarget: '_blank',
      gdp: 664,
      change: 8.11,
      linkTarget: '_blank',
      gdpAdjusted: 1889,
      changeAdjusted: 3.55
    },
    BI: {
        method: 'POST',
      link: '/data/world/BI',
      linkTarget: '_blank',
      gdp: 312,
      change: 4.85,
      linkTarget: '_blank',
      gdpAdjusted: 735,
      changeAdjusted: -5.2
    },
    KH: {
        method: 'POST',
      link: '/data/world/KH',
      linkTarget: '_blank',
      gdp: 1389,
      change: 8.76,
      linkTarget: '_blank',
      gdpAdjusted: 4012,
      changeAdjusted: 5.46
    },
    CM: {
        method: 'POST',
      link: '/data/world/CM',
      linkTarget: '_blank',
      gdp: 1401,
      change: 2.94,
      linkTarget: '_blank',
      gdpAdjusted: 3660,
      changeAdjusted: 0.62
    },
    CA: {
        method: 'POST',
      link: '/data/world/CA',
      linkTarget: '_blank',
      gdp: 45077,
      change: 6.27,
      linkTarget: '_blank',
      gdpAdjusted: 48265,
      changeAdjusted: 2.1
    },
    XK: {
        method: 'POST',
      link: '/data/world/XK',
      linkTarget: '_blank',
      gdp: 3880,
      change: 6.23,
      linkTarget: '_blank',
      gdpAdjusted: 10514,
      changeAdjusted: 3.14
    },
    CV: {
        method: 'POST',
      link: '/data/world/CV',
      linkTarget: '_blank',
      gdp: 3237,
      change: 4.91,
      linkTarget: '_blank',
      gdpAdjusted: 6944,
      changeAdjusted: 2.69
    },
    CF: {
        method: 'POST',
      link: '/data/world/CF',
      linkTarget: '_blank',
      gdp: 387,
      change: 7.65,
      linkTarget: '_blank',
      gdpAdjusted: 677,
      changeAdjusted: 2.45
    },
    TD: {
        method: 'POST',
      link: '/data/world/TD',
      linkTarget: '_blank',
      gdp: 810,
      change: -0.71,
      linkTarget: '_blank',
      gdpAdjusted: 2344,
      changeAdjusted: -6.15
    },
    CL: {
        method: 'POST',
      link: '/data/world/CL',
      linkTarget: '_blank',
      gdp: 15070,
      change: 9.66,
      linkTarget: '_blank',
      gdpAdjusted: 24537,
      changeAdjusted: 0.69
    },
    CN: {
        method: 'POST',
      link: '/data/world/CN',
      linkTarget: '_blank',
      gdp: 8643,
      change: 6.5,
      linkTarget: '_blank',
      gdpAdjusted: 16660,
      changeAdjusted: 6.47
    },
    CO: {
        method: 'POST',
      link: '/data/world/CO',
      linkTarget: '_blank',
      gdp: 6273,
      change: 9.21,
      linkTarget: '_blank',
      gdpAdjusted: 14485,
      changeAdjusted: 0.96
    },
    KM: {
        method: 'POST',
      link: '/data/world/KM',
      linkTarget: '_blank',
      gdp: 788,
      change: 3.09,
      linkTarget: '_blank',
      gdpAdjusted: 1588,
      changeAdjusted: 0.25
    },
    CG: {
        method: 'POST',
      link: '/data/world/CG',
      linkTarget: '_blank',
      gdp: 1958,
      change: 6.66,
      linkTarget: '_blank',
      gdpAdjusted: 6642,
      changeAdjusted: -7.2
    },
    CR: {
        method: 'POST',
      link: '/data/world/CR',
      linkTarget: '_blank',
      gdp: 11685,
      change: -0.77,
      linkTarget: '_blank',
      gdpAdjusted: 16877,
      changeAdjusted: 2.24
    },
    HR: {
        method: 'POST',
      link: '/data/world/HR',
      linkTarget: '_blank',
      gdp: 13138,
      change: 6.7,
      linkTarget: '_blank',
      gdpAdjusted: 24423,
      changeAdjusted: 3.15
    },
    CY: {
        method: 'POST',
      link: '/data/world/CY',
      linkTarget: '_blank',
      gdp: 24976,
      change: 5.65,
      linkTarget: '_blank',
      gdpAdjusted: 37023,
      changeAdjusted: 3.95
    },
    CZ: {
        method: 'POST',
      link: '/data/world/CZ',
      linkTarget: '_blank',
      gdp: 20152,
      change: 8.9,
      linkTarget: '_blank',
      gdpAdjusted: 35512,
      changeAdjusted: 4.23
    },
    CD: {
        method: 'POST',
      link: '/data/world/CD',
      linkTarget: '_blank',
      gdp: 478,
      change: 2.32,
      linkTarget: '_blank',
      gdpAdjusted: 790,
      changeAdjusted: 0.2
    },
    DK: {
        method: 'POST',
      link: '/data/world/DK',
      linkTarget: '_blank',
      gdp: 56444,
      change: 4.97,
      linkTarget: '_blank',
      gdpAdjusted: 49883,
      changeAdjusted: 1.49
    },
    DJ: {
        method: 'POST',
      link: '/data/world/DJ',
      linkTarget: '_blank',
      gdp: 1989,
      change: 4.52,
      linkTarget: '_blank',
      gdpAdjusted: 3559,
      changeAdjusted: 5.19
    },
    DM: {
        method: 'POST',
      link: '/data/world/DM',
      linkTarget: '_blank',
      gdp: 7921,
      change: -3.63,
      linkTarget: '_blank',
      gdpAdjusted: 11102,
      changeAdjusted: -4.69
    },
    DO: {
        method: 'POST',
      link: '/data/world/DO',
      linkTarget: '_blank',
      gdp: 7375,
      change: 3.67,
      linkTarget: '_blank',
      gdpAdjusted: 16944,
      changeAdjusted: 3.5
    },
    EC: {
        method: 'POST',
      link: '/data/world/EC',
      linkTarget: '_blank',
      gdp: 6098,
      change: 2.21,
      linkTarget: '_blank',
      gdpAdjusted: 11482,
      changeAdjusted: 1.29
    },
    EG: {
        method: 'POST',
      link: '/data/world/EG',
      linkTarget: '_blank',
      gdp: 2501,
      change: -32.17,
      linkTarget: '_blank',
      gdpAdjusted: 12671,
      changeAdjusted: 2.36
    },
    SV: {
        method: 'POST',
      link: '/data/world/SV',
      linkTarget: '_blank',
      gdp: 4400,
      change: 4.06,
      linkTarget: '_blank',
      gdpAdjusted: 8948,
      changeAdjusted: 1.88
    },
    GQ: {
        method: 'POST',
      link: '/data/world/GQ',
      linkTarget: '_blank',
      gdp: 12727,
      change: 2.65,
      linkTarget: '_blank',
      gdpAdjusted: 36017,
      changeAdjusted: -7.97
    },
    ER: {
        method: 'POST',
      link: '/data/world/ER',
      linkTarget: '_blank',
      gdp: 980,
      change: 13.88,
      linkTarget: '_blank',
      gdpAdjusted: 1581,
      changeAdjusted: 2.73
    },
    EE: {
        method: 'POST',
      link: '/data/world/EE',
      linkTarget: '_blank',
      gdp: 19840,
      change: 11.47,
      linkTarget: '_blank',
      gdpAdjusted: 31749,
      changeAdjusted: 5.08
    },
    ET: {
        method: 'POST',
      link: '/data/world/ET',
      linkTarget: '_blank',
      gdp: 873,
      change: 8.82,
      linkTarget: '_blank',
      gdpAdjusted: 2161,
      changeAdjusted: 8.43
    },
    FM: {
        method: 'POST',
      link: '/data/world/FM',
      linkTarget: '_blank',
      gdp: 3200,
      change: 1.45,
      linkTarget: '_blank',
      gdpAdjusted: 3393,
      changeAdjusted: 1.37
    },
    FJ: {
        method: 'POST',
      link: '/data/world/FJ',
      linkTarget: '_blank',
      gdp: 5740,
      change: 7.44,
      linkTarget: '_blank',
      gdpAdjusted: 9777,
      changeAdjusted: 3.08
    },
    FI: {
        method: 'POST',
      link: '/data/world/FI',
      linkTarget: '_blank',
      gdp: 46017,
      change: 5.75,
      linkTarget: '_blank',
      gdpAdjusted: 44333,
      changeAdjusted: 2.63
    },
    FR: {
        method: 'POST',
      link: '/data/world/FR',
      linkTarget: '_blank',
      gdp: 39869,
      change: 4.35,
      linkTarget: '_blank',
      gdpAdjusted: 43760,
      changeAdjusted: 1.46
    },
    GA: {
        method: 'POST',
      link: '/data/world/GA',
      linkTarget: '_blank',
      gdp: 7972,
      change: 6.96,
      linkTarget: '_blank',
      gdpAdjusted: 19254,
      changeAdjusted: -1.33
    },
    GM: {
        method: 'POST',
      link: '/data/world/GM',
      linkTarget: '_blank',
      gdp: 480,
      change: 1.45,
      linkTarget: '_blank',
      gdpAdjusted: 1713,
      changeAdjusted: 0.56
    },
    GE: {
        method: 'POST',
      link: '/data/world/GE',
      linkTarget: '_blank',
      gdp: 4099,
      change: 5.86,
      linkTarget: '_blank',
      gdpAdjusted: 10747,
      changeAdjusted: 5.07
    },
    DE: {
        method: 'POST',
      link: '/data/world/DE',
      linkTarget: '_blank',
      gdp: 44550,
      change: 5.44,
      linkTarget: '_blank',
      gdpAdjusted: 50425,
      changeAdjusted: 2.07
    },
    GH: {
        method: 'POST',
      link: '/data/world/GH',
      linkTarget: '_blank',
      gdp: 1663,
      change: 7.18,
      linkTarget: '_blank',
      gdpAdjusted: 4729,
      changeAdjusted: 6.28
    },
    GR: {
        method: 'POST',
      link: '/data/world/GR',
      linkTarget: '_blank',
      gdp: 18637,
      change: 4.26,
      linkTarget: '_blank',
      gdpAdjusted: 27737,
      changeAdjusted: 1.56
    },
    GD: {
        method: 'POST',
      link: '/data/world/GD',
      linkTarget: '_blank',
      gdp: 10360,
      change: 5.1,
      linkTarget: '_blank',
      gdpAdjusted: 14926,
      changeAdjusted: 3.04
    },
    GT: {
        method: 'POST',
      link: '/data/world/GT',
      linkTarget: '_blank',
      gdp: 4472,
      change: 7.84,
      linkTarget: '_blank',
      gdpAdjusted: 8145,
      changeAdjusted: 0.81
    },
    GN: {
        method: 'POST',
      link: '/data/world/GN',
      linkTarget: '_blank',
      gdp: 749,
      change: 11.88,
      linkTarget: '_blank',
      gdpAdjusted: 2041,
      changeAdjusted: 4.09
    },
    GW: {
        method: 'POST',
      link: '/data/world/GW',
      linkTarget: '_blank',
      gdp: 794,
      change: 13.43,
      linkTarget: '_blank',
      gdpAdjusted: 1845,
      changeAdjusted: 3.57
    },
    GY: {
        method: 'POST',
      link: '/data/world/GY',
      linkTarget: '_blank',
      gdp: 4710,
      change: 3.24,
      linkTarget: '_blank',
      gdpAdjusted: 8161,
      changeAdjusted: 1.55
    },
    HT: {
        method: 'POST',
      link: '/data/world/HT',
      linkTarget: '_blank',
      gdp: 784,
      change: 3.96,
      linkTarget: '_blank',
      gdpAdjusted: 1815,
      changeAdjusted: -0.03
    },
    HN: {
        method: 'POST',
      link: '/data/world/HN',
      linkTarget: '_blank',
      gdp: 2766,
      change: 4.66,
      linkTarget: '_blank',
      gdpAdjusted: 5562,
      changeAdjusted: 3.17
    },
    HK: {
        method: 'POST',
      link: '/data/world/HK',
      linkTarget: '_blank',
      gdp: 46109,
      change: 6.01,
      linkTarget: '_blank',
      gdpAdjusted: 61393,
      changeAdjusted: 2.9
    },
    HU: {
        method: 'POST',
      link: '/data/world/HU',
      linkTarget: '_blank',
      gdp: 15531,
      change: 3.16,
      linkTarget: '_blank',
      gdpAdjusted: 29474,
      changeAdjusted: 4.32
    },
    IS: {
        method: 'POST',
      link: '/data/world/IS',
      linkTarget: '_blank',
      gdp: 70332,
      change: 16.46,
      linkTarget: '_blank',
      gdpAdjusted: 51841,
      changeAdjusted: 2.87
    },
    IN: {
        method: 'POST',
      link: '/data/world/IN',
      linkTarget: '_blank',
      gdp: 1983,
      change: 13.35,
      linkTarget: '_blank',
      gdpAdjusted: 7183,
      changeAdjusted: 5.43
    },
    ID: {
        method: 'POST',
      link: '/data/world/ID',
      linkTarget: '_blank',
      gdp: 3876,
      change: 7.53,
      linkTarget: '_blank',
      gdpAdjusted: 12377,
      changeAdjusted: 4.33
    },
    IR: {
        method: 'POST',
      link: '/data/world/IR',
      linkTarget: '_blank',
      gdp: 5305,
      change: 5.53,
      linkTarget: '_blank',
      gdpAdjusted: 20200,
      changeAdjusted: 3.24
    },
    IQ: {
        method: 'POST',
      link: '/data/world/IQ',
      linkTarget: '_blank',
      gdp: 5088,
      change: 12.24,
      linkTarget: '_blank',
      gdpAdjusted: 16954,
      changeAdjusted: -3.79
    },
    IE: {
        method: 'POST',
      link: '/data/world/IE',
      linkTarget: '_blank',
      gdp: 70638,
      change: 9.02,
      linkTarget: '_blank',
      gdpAdjusted: 75539,
      changeAdjusted: 6.92
    },
    IL: {
        method: 'POST',
      link: '/data/world/IL',
      linkTarget: '_blank',
      gdp: 40258,
      change: 8.24,
      linkTarget: '_blank',
      gdpAdjusted: 36340,
      changeAdjusted: 1.77
    },
    IT: {
        method: 'POST',
      link: '/data/world/IT',
      linkTarget: '_blank',
      gdp: 31984,
      change: 4.31,
      linkTarget: '_blank',
      gdpAdjusted: 38140,
      changeAdjusted: 1.59
    },
    CI: {
        method: 'POST',
      link: '/data/world/CI',
      linkTarget: '_blank',
      gdp: 1617,
      change: 8.14,
      linkTarget: '_blank',
      gdpAdjusted: 3883,
      changeAdjusted: 5.28
    },
    JM: {
        method: 'POST',
      link: '/data/world/JM',
      linkTarget: '_blank',
      gdp: 5048,
      change: 2.0,
      linkTarget: '_blank',
      gdpAdjusted: 9163,
      changeAdjusted: 0.67
    },
    JP: {
        method: 'POST',
      link: '/data/world/JP',
      linkTarget: '_blank',
      gdp: 38440,
      change: -1.4,
      linkTarget: '_blank',
      gdpAdjusted: 42832,
      changeAdjusted: 1.94
    },
    JO: {
        method: 'POST',
      link: '/data/world/JO',
      linkTarget: '_blank',
      gdp: 5678,
      change: 2.31,
      linkTarget: '_blank',
      gdpAdjusted: 12494,
      changeAdjusted: 0.13
    },
    KZ: {
        method: 'POST',
      link: '/data/world/KZ',
      linkTarget: '_blank',
      gdp: 8841,
      change: 18.57,
      linkTarget: '_blank',
      gdpAdjusted: 26252,
      changeAdjusted: 2.87
    },
    KE: {
        method: 'POST',
      link: '/data/world/KE',
      linkTarget: '_blank',
      gdp: 1702,
      change: 9.66,
      linkTarget: '_blank',
      gdpAdjusted: 3491,
      changeAdjusted: 2.29
    },
    KI: {
        method: 'POST',
      link: '/data/world/KI',
      linkTarget: '_blank',
      gdp: 1721,
      change: 6.42,
      linkTarget: '_blank',
      gdpAdjusted: 1976,
      changeAdjusted: 0.43
    },
    KW: {
        method: 'POST',
      link: '/data/world/KW',
      linkTarget: '_blank',
      gdp: 26005,
      change: 5.6,
      linkTarget: '_blank',
      gdpAdjusted: 66163,
      changeAdjusted: -4.31
    },
    KG: {
        method: 'POST',
      link: '/data/world/KG',
      linkTarget: '_blank',
      gdp: 1144,
      change: 7.19,
      linkTarget: '_blank',
      gdpAdjusted: 3667,
      changeAdjusted: 3.05
    },
    LA: {
        method: 'POST',
      link: '/data/world/LA',
      linkTarget: '_blank',
      gdp: 2543,
      change: 5.2,
      linkTarget: '_blank',
      gdpAdjusted: 7366,
      changeAdjusted: 5.38
    },
    LV: {
        method: 'POST',
      link: '/data/world/LV',
      linkTarget: '_blank',
      gdp: 15547,
      change: 10.98,
      linkTarget: '_blank',
      gdpAdjusted: 27644,
      changeAdjusted: 5.58
    },
    LB: {
        method: 'POST',
      link: '/data/world/LB',
      linkTarget: '_blank',
      gdp: 11408,
      change: 2.73,
      linkTarget: '_blank',
      gdpAdjusted: 19439,
      changeAdjusted: 0.63
    },
    LS: {
        method: 'POST',
      link: '/data/world/LS',
      linkTarget: '_blank',
      gdp: 1425,
      change: 12.94,
      linkTarget: '_blank',
      gdpAdjusted: 3581,
      changeAdjusted: 1.78
    },
    LR: {
        method: 'POST',
      link: '/data/world/LR',
      linkTarget: '_blank',
      gdp: 729,
      change: -2.12,
      linkTarget: '_blank',
      gdpAdjusted: 1354,
      changeAdjusted: -0.05
    },
    LY: {
        method: 'POST',
      link: '/data/world/LY',
      linkTarget: '_blank',
      gdp: 4859,
      change: 67.32,
      linkTarget: '_blank',
      gdpAdjusted: 9987,
      changeAdjusted: 69.48
    },
    LT: {
        method: 'POST',
      link: '/data/world/LT',
      linkTarget: '_blank',
      gdp: 16730,
      change: 12.14,
      linkTarget: '_blank',
      gdpAdjusted: 32299,
      changeAdjusted: 4.38
    },
    LU: {
        method: 'POST',
      link: '/data/world/LU',
      linkTarget: '_blank',
      gdp: 105803,
      change: 3.94,
      linkTarget: '_blank',
      gdpAdjusted: 106374,
      changeAdjusted: 2.27
    },
    MO: {
        method: 'POST',
      link: '/data/world/MO',
      linkTarget: '_blank',
      gdp: 77451,
      change: 10.1,
      linkTarget: '_blank',
      gdpAdjusted: 111629,
      changeAdjusted: 9.42
    },
    MK: {
        method: 'POST',
      link: '/data/world/MK',
      linkTarget: '_blank',
      gdp: 5474,
      change: 5.51,
      linkTarget: '_blank',
      gdpAdjusted: 14914,
      changeAdjusted: -0.06
    },
    MG: {
        method: 'POST',
      link: '/data/world/MG',
      linkTarget: '_blank',
      gdp: 448,
      change: 11.5,
      linkTarget: '_blank',
      gdpAdjusted: 1551,
      changeAdjusted: 1.37
    },
    MW: {
        method: 'POST',
      link: '/data/world/MW',
      linkTarget: '_blank',
      gdp: 324,
      change: 10.17,
      linkTarget: '_blank',
      gdpAdjusted: 1167,
      changeAdjusted: 1.13
    },
    MY: {
        method: 'POST',
      link: '/data/world/MY',
      linkTarget: '_blank',
      gdp: 9813,
      change: 4.68,
      linkTarget: '_blank',
      gdpAdjusted: 29041,
      changeAdjusted: 4.55
    },
    MV: {
        method: 'POST',
      link: '/data/world/MV',
      linkTarget: '_blank',
      gdp: 12527,
      change: 5.17,
      linkTarget: '_blank',
      gdpAdjusted: 19151,
      changeAdjusted: 2.98
    },
    ML: {
        method: 'POST',
      link: '/data/world/ML',
      linkTarget: '_blank',
      gdp: 811,
      change: 5.62,
      linkTarget: '_blank',
      gdpAdjusted: 2170,
      changeAdjusted: 2.31
    },
    MT: {
        method: 'POST',
      link: '/data/world/MT',
      linkTarget: '_blank',
      gdp: 27250,
      change: 8.83,
      linkTarget: '_blank',
      gdpAdjusted: 41945,
      changeAdjusted: 6.26
    },
    MH: {
        method: 'POST',
      link: '/data/world/MH',
      linkTarget: '_blank',
      gdp: 3625,
      change: 8.21,
      linkTarget: '_blank',
      gdpAdjusted: 3439,
      changeAdjusted: 1.83
    },
    MR: {
        method: 'POST',
      link: '/data/world/MR',
      linkTarget: '_blank',
      gdp: 1318,
      change: 5.15,
      linkTarget: '_blank',
      gdpAdjusted: 4444,
      changeAdjusted: 0.52
    },
    MU: {
        method: 'POST',
      link: '/data/world/MU',
      linkTarget: '_blank',
      gdp: 9794,
      change: 1.88,
      linkTarget: '_blank',
      gdpAdjusted: 21640,
      changeAdjusted: 3.67
    },
    MX: {
        method: 'POST',
      link: '/data/world/MX',
      linkTarget: '_blank',
      gdp: 9304,
      change: 5.64,
      linkTarget: '_blank',
      gdpAdjusted: 19903,
      changeAdjusted: 0.91
    },
    MD: {
        method: 'POST',
      link: '/data/world/MD',
      linkTarget: '_blank',
      gdp: 2280,
      change: 19.51,
      linkTarget: '_blank',
      gdpAdjusted: 5661,
      changeAdjusted: 4.24
    },
    MN: {
        method: 'POST',
      link: '/data/world/MN',
      linkTarget: '_blank',
      gdp: 3640,
      change: -0.75,
      linkTarget: '_blank',
      gdpAdjusted: 12979,
      changeAdjusted: 3.65
    },
    ME: {
        method: 'POST',
      link: '/data/world/ME',
      linkTarget: '_blank',
      gdp: 7647,
      change: 8.8,
      linkTarget: '_blank',
      gdpAdjusted: 17735,
      changeAdjusted: 4.16
    },
    MA: {
        method: 'POST',
      link: '/data/world/MA',
      linkTarget: '_blank',
      gdp: 3151,
      change: 4.89,
      linkTarget: '_blank',
      gdpAdjusted: 8567,
      changeAdjusted: 2.96
    },
    MZ: {
        method: 'POST',
      link: '/data/world/MZ',
      linkTarget: '_blank',
      gdp: 429,
      change: 9.5,
      linkTarget: '_blank',
      gdpAdjusted: 1244,
      changeAdjusted: 0.09
    },
    MM: {
        method: 'POST',
      link: '/data/world/MM',
      linkTarget: '_blank',
      gdp: 1264,
      change: 4.41,
      linkTarget: '_blank',
      gdpAdjusted: 6244,
      changeAdjusted: 5.82
    },
    NA: {
        method: 'POST',
      link: '/data/world/NA',
      linkTarget: '_blank',
      gdp: 5413,
      change: 14.96,
      linkTarget: '_blank',
      gdpAdjusted: 11312,
      changeAdjusted: -3.12
    },
    NR: {
        method: 'POST',
      link: '/data/world/NR',
      linkTarget: '_blank',
      gdp: 8575,
      change: 9.6,
      linkTarget: '_blank',
      gdpAdjusted: 12002,
      changeAdjusted: 1.22
    },
    NP: {
        method: 'POST',
      link: '/data/world/NP',
      linkTarget: '_blank',
      gdp: 834,
      change: 14.45,
      linkTarget: '_blank',
      gdpAdjusted: 2679,
      changeAdjusted: 6.41
    },
    NL: {
        method: 'POST',
      link: '/data/world/NL',
      linkTarget: '_blank',
      gdp: 48346,
      change: 5.89,
      linkTarget: '_blank',
      gdpAdjusted: 53635,
      changeAdjusted: 2.83
    },
    NZ: {
        method: 'POST',
      link: '/data/world/NZ',
      linkTarget: '_blank',
      gdp: 41593,
      change: 6.51,
      linkTarget: '_blank',
      gdpAdjusted: 38934,
      changeAdjusted: 2.03
    },
    NI: {
        method: 'POST',
      link: '/data/world/NI',
      linkTarget: '_blank',
      gdp: 2207,
      change: 2.57,
      linkTarget: '_blank',
      gdpAdjusted: 5849,
      changeAdjusted: 3.82
    },
    NE: {
        method: 'POST',
      link: '/data/world/NE',
      linkTarget: '_blank',
      gdp: 440,
      change: 6.29,
      linkTarget: '_blank',
      gdpAdjusted: 1164,
      changeAdjusted: 1.37
    },
    NG: {
        method: 'POST',
      link: '/data/world/NG',
      linkTarget: '_blank',
      gdp: 1994,
      change: -9.68,
      linkTarget: '_blank',
      gdpAdjusted: 5929,
      changeAdjusted: -1.76
    },
    NO: {
        method: 'POST',
      link: '/data/world/NO',
      linkTarget: '_blank',
      gdp: 74941,
      change: 6.07,
      linkTarget: '_blank',
      gdpAdjusted: 71831,
      changeAdjusted: 0.87
    },
    OM: {
        method: 'POST',
      link: '/data/world/OM',
      linkTarget: '_blank',
      gdp: 17973,
      change: 0.64,
      linkTarget: '_blank',
      gdpAdjusted: 45157,
      changeAdjusted: -2.23
    },
    PK: {
        method: 'POST',
      link: '/data/world/PK',
      linkTarget: '_blank',
      gdp: 1541,
      change: 6.95,
      linkTarget: '_blank',
      gdpAdjusted: 5358,
      changeAdjusted: 3.58
    },
    PW: {
        method: 'POST',
      link: '/data/world/PW',
      linkTarget: '_blank',
      gdp: 17096,
      change: 0.27,
      linkTarget: '_blank',
      gdpAdjusted: 15934,
      changeAdjusted: -2.06
    },
    PA: {
        method: 'POST',
      link: '/data/world/PA',
      linkTarget: '_blank',
      gdp: 15089,
      change: 5.35,
      linkTarget: '_blank',
      gdpAdjusted: 25351,
      changeAdjusted: 3.82
    },
    PG: {
        method: 'POST',
      link: '/data/world/PG',
      linkTarget: '_blank',
      gdp: 2861,
      change: 2.51,
      linkTarget: '_blank',
      gdpAdjusted: 3674,
      changeAdjusted: 0.46
    },
    PY: {
        method: 'POST',
      link: '/data/world/PY',
      linkTarget: '_blank',
      gdp: 4260,
      change: 6.47,
      linkTarget: '_blank',
      gdpAdjusted: 9826,
      changeAdjusted: 3.06
    },
    PE: {
        method: 'POST',
      link: '/data/world/PE',
      linkTarget: '_blank',
      gdp: 6199,
      change: 8.93,
      linkTarget: '_blank',
      gdpAdjusted: 13334,
      changeAdjusted: 1.31
    },
    PH: {
        method: 'POST',
      link: '/data/world/PH',
      linkTarget: '_blank',
      gdp: 2976,
      change: 0.78,
      linkTarget: '_blank',
      gdpAdjusted: 8315,
      changeAdjusted: 5.15
    },
    PL: {
        method: 'POST',
      link: '/data/world/PL',
      linkTarget: '_blank',
      gdp: 13822,
      change: 11.37,
      linkTarget: '_blank',
      gdpAdjusted: 29521,
      changeAdjusted: 4.73
    },
    PT: {
        method: 'POST',
      link: '/data/world/PT',
      linkTarget: '_blank',
      gdp: 21161,
      change: 3.68,
      linkTarget: '_blank',
      gdpAdjusted: 30417,
      changeAdjusted: 3.08
    },
    PR: {
        method: 'POST',
      link: '/data/world/PR',
      linkTarget: '_blank',
      gdp: 30488,
      change: -0.98,
      linkTarget: '_blank',
      gdpAdjusted: 37339,
      changeAdjusted: -2.35
    },
    QA: {
        method: 'POST',
      link: '/data/world/QA',
      linkTarget: '_blank',
      gdp: 60804,
      change: 4.39,
      linkTarget: '_blank',
      gdpAdjusted: 124529,
      changeAdjusted: -2.31
    },
    RO: {
        method: 'POST',
      link: '/data/world/RO',
      linkTarget: '_blank',
      gdp: 10757,
      change: 13.18,
      linkTarget: '_blank',
      gdpAdjusted: 24508,
      changeAdjusted: 7.49
    },
    RU: {
        method: 'POST',
      link: '/data/world/RU',
      linkTarget: '_blank',
      gdp: 10608,
      change: 19.19,
      linkTarget: '_blank',
      gdpAdjusted: 27834,
      changeAdjusted: 1.5
    },
    RW: {
        method: 'POST',
      link: '/data/world/RW',
      linkTarget: '_blank',
      gdp: 772,
      change: 5.2,
      linkTarget: '_blank',
      gdpAdjusted: 2080,
      changeAdjusted: 3.7
    },
    KN: {
        method: 'POST',
      link: '/data/world/KN',
      linkTarget: '_blank',
      gdp: 16296,
      change: 1.9,
      linkTarget: '_blank',
      gdpAdjusted: 26845,
      changeAdjusted: 1.71
    },
    LC: {
        method: 'POST',
      link: '/data/world/LC',
      linkTarget: '_blank',
      gdp: 9607,
      change: 1.99,
      linkTarget: '_blank',
      gdpAdjusted: 14450,
      changeAdjusted: 2.51
    },
    VC: {
        method: 'POST',
      link: '/data/world/VC',
      linkTarget: '_blank',
      gdp: 7270,
      change: 3.99,
      linkTarget: '_blank',
      gdpAdjusted: 11491,
      changeAdjusted: 0.7
    },
    WS: {
        method: 'POST',
      link: '/data/world/WS',
      linkTarget: '_blank',
      gdp: 4253,
      change: 5.93,
      linkTarget: '_blank',
      gdpAdjusted: 5740,
      changeAdjusted: 1.8
    },
    SM: {
        method: 'POST',
      link: '/data/world/SM',
      linkTarget: '_blank',
      gdp: 47406,
      change: 3.8,
      linkTarget: '_blank',
      gdpAdjusted: 59466,
      changeAdjusted: 1.65
    },
    ST: {
        method: 'POST',
      link: '/data/world/ST',
      linkTarget: '_blank',
      gdp: 1785,
      change: 5.7,
      linkTarget: '_blank',
      gdpAdjusted: 3180,
      changeAdjusted: 2.58
    },
    SA: {
        method: 'POST',
      link: '/data/world/SA',
      linkTarget: '_blank',
      gdp: 21120,
      change: 3.95,
      linkTarget: '_blank',
      gdpAdjusted: 54777,
      changeAdjusted: -2.63
    },
    SN: {
        method: 'POST',
      link: '/data/world/SN',
      linkTarget: '_blank',
      gdp: 1038,
      change: 8.73,
      linkTarget: '_blank',
      gdpAdjusted: 2727,
      changeAdjusted: 4.39
    },
    RS: {
        method: 'POST',
      link: '/data/world/RS',
      linkTarget: '_blank',
      gdp: 5899,
      change: 8.71,
      linkTarget: '_blank',
      gdpAdjusted: 15000,
      changeAdjusted: 1.83
    },
    SC: {
        method: 'POST',
      link: '/data/world/SC',
      linkTarget: '_blank',
      gdp: 15686,
      change: 2.97,
      linkTarget: '_blank',
      gdpAdjusted: 28779,
      changeAdjusted: 3.75
    },
    SL: {
        method: 'POST',
      link: '/data/world/SL',
      linkTarget: '_blank',
      gdp: 492,
      change: -5.88,
      linkTarget: '_blank',
      gdpAdjusted: 1553,
      changeAdjusted: 1.35
    },
    SG: {
        method: 'POST',
      link: '/data/world/SG',
      linkTarget: '_blank',
      gdp: 57713,
      change: 4.48,
      linkTarget: '_blank',
      gdpAdjusted: 93906,
      changeAdjusted: 2.22
    },
    SK: {
        method: 'POST',
      link: '/data/world/SK',
      linkTarget: '_blank',
      gdp: 17664,
      change: 6.73,
      linkTarget: '_blank',
      gdpAdjusted: 33025,
      changeAdjusted: 3.61
    },
    SI: {
        method: 'POST',
      link: '/data/world/SI',
      linkTarget: '_blank',
      gdp: 23654,
      change: 9.17,
      linkTarget: '_blank',
      gdpAdjusted: 34408,
      changeAdjusted: 4.93
    },
    SB: {
        method: 'POST',
      link: '/data/world/SB',
      linkTarget: '_blank',
      gdp: 2081,
      change: 1.18,
      linkTarget: '_blank',
      gdpAdjusted: 2157,
      changeAdjusted: 1.29
    },
    SO: {
        method: 'POST',
      link: '/data/world/SO',
      linkTarget: '_blank',
      gdp: 486,
      change: 6.38,
      linkTarget: '_blank',
      gdpAdjusted: 1229,
      changeAdjusted: -1.82
    },
    ZA: {
        method: 'POST',
      link: '/data/world/ZA',
      linkTarget: '_blank',
      gdp: 6180,
      change: 16.25,
      linkTarget: '_blank',
      gdpAdjusted: 13545,
      changeAdjusted: -0.07
    },
    KR: {
        method: 'POST',
      link: '/data/world/KR',
      linkTarget: '_blank',
      gdp: 29891,
      change: 8.56,
      linkTarget: '_blank',
      gdpAdjusted: 39434,
      changeAdjusted: 2.72
    },
    SS: {
        method: 'POST',
      link: '/data/world/SS',
      linkTarget: '_blank',
      gdp: 228,
      change: -18.73,
      linkTarget: '_blank',
      gdpAdjusted: 1489,
      changeAdjusted: -12.82
    },
    ES: {
        method: 'POST',
      link: '/data/world/ES',
      linkTarget: '_blank',
      gdp: 28359,
      change: 6.31,
      linkTarget: '_blank',
      gdpAdjusted: 38286,
      changeAdjusted: 3.01
    },
    LK: {
        method: 'POST',
      link: '/data/world/LK',
      linkTarget: '_blank',
      gdp: 4085,
      change: 6.95,
      linkTarget: '_blank',
      gdpAdjusted: 12811,
      changeAdjusted: 3.46
    },
    SD: {
        method: 'POST',
      link: '/data/world/SD',
      linkTarget: '_blank',
      gdp: 1428,
      change: -1.91,
      linkTarget: '_blank',
      gdpAdjusted: 4586,
      changeAdjusted: 0.82
    },
    SR: {
        method: 'POST',
      link: '/data/world/SR',
      linkTarget: '_blank',
      gdp: 5746,
      change: 0.76,
      linkTarget: '_blank',
      gdpAdjusted: 13876,
      changeAdjusted: -0.87
    },
    SZ: {
        method: 'POST',
      link: '/data/world/SZ',
      linkTarget: '_blank',
      gdp: 3915,
      change: 15.19,
      linkTarget: '_blank',
      gdpAdjusted: 9884,
      changeAdjusted: -0.67
    },
    SE: {
        method: 'POST',
      link: '/data/world/SE',
      linkTarget: '_blank',
      gdp: 53218,
      change: 3.39,
      linkTarget: '_blank',
      gdpAdjusted: 51475,
      changeAdjusted: 1.68
    },
    CH: {
        method: 'POST',
      link: '/data/world/CH',
      linkTarget: '_blank',
      gdp: 80591,
      change: 0.35,
      linkTarget: '_blank',
      gdpAdjusted: 61422,
      changeAdjusted: 0.24
    },
    TW: {
        method: 'POST',
      link: '/data/world/TW',
      linkTarget: '_blank',
      gdp: 24577,
      change: 9.03,
      linkTarget: '_blank',
      gdpAdjusted: 50294,
      changeAdjusted: 2.51
    },
    TJ: {
        method: 'POST',
      link: '/data/world/TJ',
      linkTarget: '_blank',
      gdp: 824,
      change: 2.54,
      linkTarget: '_blank',
      gdpAdjusted: 3211,
      changeAdjusted: 5.06
    },
    TZ: {
        method: 'POST',
      link: '/data/world/TZ',
      linkTarget: '_blank',
      gdp: 1034,
      change: 5.58,
      linkTarget: '_blank',
      gdpAdjusted: 3240,
      changeAdjusted: 2.96
    },
    TH: {
        method: 'POST',
      link: '/data/world/TH',
      linkTarget: '_blank',
      gdp: 6591,
      change: 10.39,
      linkTarget: '_blank',
      gdpAdjusted: 17855,
      changeAdjusted: 3.68
    },
    TL: {
        method: 'POST',
      link: '/data/world/TL',
      linkTarget: '_blank',
      gdp: 2104,
      change: 1.19,
      linkTarget: '_blank',
      gdpAdjusted: 5444,
      changeAdjusted: -2.67
    },
    TG: {
        method: 'POST',
      link: '/data/world/TG',
      linkTarget: '_blank',
      gdp: 611,
      change: 4.24,
      linkTarget: '_blank',
      gdpAdjusted: 1659,
      changeAdjusted: 1.95
    },
    TO: {
        method: 'POST',
      link: '/data/world/TO',
      linkTarget: '_blank',
      gdp: 4177,
      change: 5.56,
      linkTarget: '_blank',
      gdpAdjusted: 5608,
      changeAdjusted: 2.26
    },
    TT: {
        method: 'POST',
      link: '/data/world/TT',
      linkTarget: '_blank',
      gdp: 15769,
      change: -3.46,
      linkTarget: '_blank',
      gdpAdjusted: 31367,
      changeAdjusted: -2.58
    },
    TN: {
        method: 'POST',
      link: '/data/world/TN',
      linkTarget: '_blank',
      gdp: 3496,
      change: -5.24,
      linkTarget: '_blank',
      gdpAdjusted: 11755,
      changeAdjusted: 0.85
    },
    TR: {
        method: 'POST',
      link: '/data/world/TR',
      linkTarget: '_blank',
      gdp: 10512,
      change: -2.82,
      linkTarget: '_blank',
      gdpAdjusted: 26893,
      changeAdjusted: 5.68
    },
    TM: {
        method: 'POST',
      link: '/data/world/TM',
      linkTarget: '_blank',
      gdp: 6643,
      change: 3.59,
      linkTarget: '_blank',
      gdpAdjusted: 18126,
      changeAdjusted: 4.86
    },
    TV: {
        method: 'POST',
      link: '/data/world/TV',
      linkTarget: '_blank',
      gdp: 3638,
      change: 2.24,
      linkTarget: '_blank',
      gdpAdjusted: 3807,
      changeAdjusted: 2.34
    },
    UG: {
        method: 'POST',
      link: '/data/world/UG',
      linkTarget: '_blank',
      gdp: 699,
      change: 1.04,
      linkTarget: '_blank',
      gdpAdjusted: 2354,
      changeAdjusted: 2.86
    },
    UA: {
        method: 'POST',
      link: '/data/world/UA',
      linkTarget: '_blank',
      gdp: 2583,
      change: 17.46,
      linkTarget: '_blank',
      gdpAdjusted: 8713,
      changeAdjusted: 3.02
    },
    AE: {
        method: 'POST',
      link: '/data/world/AE',
      linkTarget: '_blank',
      gdp: 37226,
      change: 5.21,
      linkTarget: '_blank',
      gdpAdjusted: 67741,
      changeAdjusted: -0.86
    },
    GB: {
        method: 'POST',
      link: '/data/world/GB',
      linkTarget: '_blank',
      gdp: 39735,
      change: -1.96,
      linkTarget: '_blank',
      gdpAdjusted: 44117,
      changeAdjusted: 1.21
    },
    US: {
        method: 'POST',
      link: '/data/world/US',
      linkTarget: '_blank',
      gdp: 59501,
      change: 3.37,
      linkTarget: '_blank',
      gdpAdjusted: 59501,
      changeAdjusted: 1.48
    },
    UY: {
        method: 'POST',
      link: '/data/world/UY',
      linkTarget: '_blank',
      gdp: 16722,
      change: 11.02,
      linkTarget: '_blank',
      gdpAdjusted: 22371,
      changeAdjusted: 2.74
    },
    UZ: {
        method: 'POST',
      link: '/data/world/UZ',
      linkTarget: '_blank',
      gdp: 1491,
      change: -28.81,
      linkTarget: '_blank',
      gdpAdjusted: 6929,
      changeAdjusted: 3.89
    },
    VU: {
        method: 'POST',
      link: '/data/world/VU',
      linkTarget: '_blank',
      gdp: 3094,
      change: 6.51,
      linkTarget: '_blank',
      gdpAdjusted: 2739,
      changeAdjusted: 2.33
    },
    VE: {
        method: 'POST',
      link: '/data/world/VE',
      linkTarget: '_blank',
      gdp: 6684,
      change: -12.16,
      linkTarget: '_blank',
      gdpAdjusted: 12114,
      changeAdjusted: -15.3
    },
    VN: {
        method: 'POST',
      link: '/data/world/VN',
      linkTarget: '_blank',
      gdp: 2354,
      change: 8.37,
      linkTarget: '_blank',
      gdpAdjusted: 6913,
      changeAdjusted: 5.78
    },
    YE: {
        method: 'POST',
      link: '/data/world/YE',
      linkTarget: '_blank',
      gdp: 551,
      change: -23.23,
      linkTarget: '_blank',
      gdpAdjusted: 1287,
      changeAdjusted: -16.17
    },
    ZM: {
        method: 'POST',
      link: '/data/world/ZM',
      linkTarget: '_blank',
      gdp: 1480,
      change: 18.11,
      linkTarget: '_blank',
      gdpAdjusted: 3996,
      changeAdjusted: 0.95
    },
    ZW: {
        method: 'POST',
      link: '/data/world/ZW',
      linkTarget: '_blank',
      gdp: 1176,
      change: 5.78,
      linkTarget: '_blank',
      gdpAdjusted: 2283,
      changeAdjusted: 1.02
    }
  }
};
