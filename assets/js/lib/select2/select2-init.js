! function(t) {
    "use strict";

    function e() {}
    e.prototype.initSelect2 = function() {
        t('[data-toggle="select2"]').select2()
    }, e.prototype.initMaxLength = function() {
        t("input#defaultconfig").maxlength({
            warningClass: "badge bg-success",
            limitReachedClass: "badge bg-danger"
        }), t("input#thresholdconfig").maxlength({
            threshold: 20,
            warningClass: "badge bg-success",
            limitReachedClass: "badge bg-danger"
        }), t("input#alloptions").maxlength({
            alwaysShow: !0,
            separator: " out of ",
            preText: "You typed ",
            postText: " chars available.",
            validate: !0,
            warningClass: "badge bg-success",
            limitReachedClass: "badge bg-danger"
        }), t("textarea#textarea").maxlength({
            alwaysShow: !0,
            warningClass: "badge bg-success",
            limitReachedClass: "badge bg-danger"
        }), t("input#placement").maxlength({
            alwaysShow: !0,
            placement: "top-left",
            warningClass: "badge bg-success",
            limitReachedClass: "badge bg-danger"
        })
    }, e.prototype.initSelectize = function() {
        t("#selectize-tags").selectize({
            persist: !1,
            createOnBlur: !0,
            create: !0
        }), t("#selectize-select").selectize({
            create: !0,
            sortField: {
                field: "text",
                direction: "asc"
            },
            dropdownParent: "body"
        }), t("#selectize-maximum").selectize({
            maxItems: 3
        }), t("#selectize-links").selectize({
            theme: "links",
            maxItems: null,
            valueField: "id",
            searchField: "title",
            options: [{
                id: 1,
                title: "Coderthemes",
                url: "https://coderthemes.com/"
            }, {
                id: 2,
                title: "Google",
                url: "http://google.com"
            }, {
                id: 3,
                title: "Yahoo",
                url: "http://yahoo.com"
            }],
            render: {
                option: function(e, a) {
                    return '<div class="option"><span class="title">' + a(e.title) + '</span><span class="url">' + a(e.url) + "</span></div>"
                },
                item: function(e, a) {
                    return '<div class="item"><a href="' + a(e.url) + '">' + a(e.title) + "</a></div>"
                }
            },
            create: function(e) {
                return {
                    id: 0,
                    title: e,
                    url: "#"
                }
            }
        }), t("#selectize-confirm").selectize({
            delimiter: ",",
            persist: !1,
            onDelete: function(e) {
                return confirm(1 < e.length ? "Are you sure you want to remove these " + e.length + " items?" : 'Are you sure you want to remove "' + e[0] + '"?')
            }
        }), t("#selectize-optgroup").selectize({
            sortField: "text"
        }), t("#selectize-programmatic").selectize({
            options: [{
                class: "mammal",
                value: "dog",
                name: "Dog"
            }, {
                class: "mammal",
                value: "cat",
                name: "Cat"
            }, {
                class: "mammal",
                value: "horse",
                name: "Horse"
            }, {
                class: "mammal",
                value: "kangaroo",
                name: "Kangaroo"
            }, {
                class: "bird",
                value: "duck",
                name: "Duck"
            }, {
                class: "bird",
                value: "chicken",
                name: "Chicken"
            }, {
                class: "bird",
                value: "ostrich",
                name: "Ostrich"
            }, {
                class: "bird",
                value: "seagull",
                name: "Seagull"
            }, {
                class: "reptile",
                value: "snake",
                name: "Snake"
            }, {
                class: "reptile",
                value: "lizard",
                name: "Lizard"
            }, {
                class: "reptile",
                value: "alligator",
                name: "Alligator"
            }, {
                class: "reptile",
                value: "turtle",
                name: "Turtle"
            }],
            optgroups: [{
                value: "mammal",
                label: "Mammal",
                label_scientific: "Mammalia"
            }, {
                value: "bird",
                label: "Bird",
                label_scientific: "Aves"
            }, {
                value: "reptile",
                label: "Reptile",
                label_scientific: "Reptilia"
            }],
            optgroupField: "class",
            labelField: "name",
            searchField: ["name"],
            render: {
                optgroup_header: function(e, a) {
                    return '<div class="optgroup-header">' + a(e.label) + ' <span class="scientific">(' + a(e.label_scientific) + ")</span></div>"
                }
            }
        }), t("#selectize-optgroup-column").selectize({
            options: [{
                id: "avenger",
                make: "dodge",
                model: "Avenger"
            }, {
                id: "caliber",
                make: "dodge",
                model: "Caliber"
            }, {
                id: "caravan-grand-passenger",
                make: "dodge",
                model: "Caravan Grand Passenger"
            }, {
                id: "challenger",
                make: "dodge",
                model: "Challenger"
            }, {
                id: "ram-1500",
                make: "dodge",
                model: "Ram 1500"
            }, {
                id: "viper",
                make: "dodge",
                model: "Viper"
            }, {
                id: "a3",
                make: "audi",
                model: "A3"
            }, {
                id: "a6",
                make: "audi",
                model: "A6"
            }, {
                id: "r8",
                make: "audi",
                model: "R8"
            }, {
                id: "rs-4",
                make: "audi",
                model: "RS 4"
            }, {
                id: "s4",
                make: "audi",
                model: "S4"
            }, {
                id: "s8",
                make: "audi",
                model: "S8"
            }, {
                id: "tt",
                make: "audi",
                model: "TT"
            }, {
                id: "avalanche",
                make: "chevrolet",
                model: "Avalanche"
            }, {
                id: "aveo",
                make: "chevrolet",
                model: "Aveo"
            }, {
                id: "cobalt",
                make: "chevrolet",
                model: "Cobalt"
            }, {
                id: "silverado",
                make: "chevrolet",
                model: "Silverado"
            }, {
                id: "suburban",
                make: "chevrolet",
                model: "Suburban"
            }, {
                id: "tahoe",
                make: "chevrolet",
                model: "Tahoe"
            }, {
                id: "trail-blazer",
                make: "chevrolet",
                model: "TrailBlazer"
            }],
            optgroups: [{
                $order: 3,
                id: "dodge",
                name: "Dodge"
            }, {
                $order: 2,
                id: "audi",
                name: "Audi"
            }, {
                $order: 1,
                id: "chevrolet",
                name: "Chevrolet"
            }],
            labelField: "model",
            valueField: "id",
            optgroupField: "make",
            optgroupLabelField: "name",
            optgroupValueField: "id",
            lockOptgroupOrder: !0,
            searchField: ["model"],
            plugins: ["optgroup_columns"],
            openOnFocus: !1
        }), t(".selectize-close-btn").selectize({
            plugins: ["remove_button"],
            persist: !1,
            create: !0,
            render: {
                item: function(e, a) {
                    return '<div>"' + a(e.text) + '"</div>'
                }
            },
            onDelete: function(e) {
                return confirm(1 < e.length ? "Are you sure you want to remove these " + e.length + " items?" : 'Are you sure you want to remove "' + e[0] + '"?')
            }
        }), t(".selectize-drop-header").selectize({
            sortField: "text",
            hideSelected: !1,
            plugins: {
                dropdown_header: {
                    title: "Language"
                }
            }
        })
    }, e.prototype.initSwitchery = function() {
        t('[data-plugin="switchery"]').each(function(e, a) {
            new Switchery(a, t(a).data())
        })
    }, e.prototype.initMultiSelect = function() {
        0 < t('[data-plugin="multiselect"]').length && t('[data-plugin="multiselect"]').multiSelect(t(this).data())
    }, e.prototype.initTouchspin = function() {
        var n = {};
        t('[data-toggle="touchspin"]').each(function(e, a) {
            var i = t.extend({}, n, t(a).data());
            t(a).TouchSpin(i)
        })
    }, e.prototype.init = function() {
        this.initSelect2(), this.initMaxLength(), this.initSelectize(), this.initSwitchery(), this.initMultiSelect(), this.initTouchspin(), window.addEventListener("resize", function() {
            var e = document.body.querySelectorAll("span"),
                a = e[e.length - 1];
            "-99999px" == a.style.top && a.remove()
        })
    }, t.FormAdvanced = new e, t.FormAdvanced.Constructor = e
}(window.jQuery),
function() {
    "use strict";
    window.jQuery.FormAdvanced.init()
}(), $(function() {
    "use strict";
    var o = $.map(countries, function(e, a) {
        return {
            value: e,
            data: a
        }
    });
    $.mockjax({
        url: "*",
        responseTime: 2e3,
        response: function(e) {
            var a = e.data.query,
                i = a.toLowerCase(),
                n = new RegExp("\\b" + $.Autocomplete.utils.escapeRegExChars(i), "gi"),
                t = {
                    query: a,
                    suggestions: $.grep(o, function(e) {
                        return n.test(e.value)
                    })
                };
            this.responseText = JSON.stringify(t)
        }
    }), $("#autocomplete-ajax").autocomplete({
        lookup: o,
        lookupFilter: function(e, a, i) {
            return new RegExp("\\b" + $.Autocomplete.utils.escapeRegExChars(i), "gi").test(e.value)
        },
        onSelect: function(e) {
            $("#selction-ajax").html("You selected: " + e.value + ", " + e.data)
        },
        onHint: function(e) {
            $("#autocomplete-ajax-x").val(e)
        },
        onInvalidateSelection: function() {
            $("#selction-ajax").html("You selected: none")
        }
    });
    var e = $.map(["Anaheim Ducks", "Atlanta Thrashers", "Boston Bruins", "Buffalo Sabres", "Calgary Flames", "Carolina Hurricanes", "Chicago Blackhawks", "Colorado Avalanche", "Columbus Blue Jackets", "Dallas Stars", "Detroit Red Wings", "Edmonton OIlers", "Florida Panthers", "Los Angeles Kings", "Minnesota Wild", "Montreal Canadiens", "Nashville Predators", "New Jersey Devils", "New Rork Islanders", "New York Rangers", "Ottawa Senators", "Philadelphia Flyers", "Phoenix Coyotes", "Pittsburgh Penguins", "Saint Louis Blues", "San Jose Sharks", "Tampa Bay Lightning", "Toronto Maple Leafs", "Vancouver Canucks", "Washington Capitals"], function(e) {
            return {
                value: e,
                data: {
                    category: "NHL"
                }
            }
        }),
        a = $.map(["Atlanta Hawks", "Boston Celtics", "Charlotte Bobcats", "Chicago Bulls", "Cleveland Cavaliers", "Dallas Mavericks", "Denver Nuggets", "Detroit Pistons", "Golden State Warriors", "Houston Rockets", "Indiana Pacers", "LA Clippers", "LA Lakers", "Memphis Grizzlies", "Miami Heat", "Milwaukee Bucks", "Minnesota Timberwolves", "New Jersey Nets", "New Orleans Hornets", "New York Knicks", "Oklahoma City Thunder", "Orlando Magic", "Philadelphia Sixers", "Phoenix Suns", "Portland Trail Blazers", "Sacramento Kings", "San Antonio Spurs", "Toronto Raptors", "Utah Jazz", "Washington Wizards"], function(e) {
            return {
                value: e,
                data: {
                    category: "NBA"
                }
            }
        }),
        i = e.concat(a);
    $("#autocomplete").devbridgeAutocomplete({
        lookup: i,
        minChars: 1,
        onSelect: function(e) {
            $("#selection").html("You selected: " + e.value + ", " + e.data.category)
        },
        showNoSuggestionNotice: !0,
        noSuggestionNotice: "Sorry, no matching results",
        groupBy: "category"
    }), $("#autocomplete-custom-append").autocomplete({
        lookup: o,
        appendTo: "#suggestions-container"
    }), $("#autocomplete-dynamic").autocomplete({
        lookup: o
    })
});
var countries = {
    AD: "Andorra",
    A2: "Andorra Test",
    AE: "United Arab Emirates",
    AF: "Afghanistan",
    AG: "Antigua and Barbuda",
    AI: "Anguilla",
    AL: "Albania",
    AM: "Armenia",
    AN: "Netherlands Antilles",
    AO: "Angola",
    AQ: "Antarctica",
    AR: "Argentina",
    AS: "American Samoa",
    AT: "Austria",
    AU: "Australia",
    AW: "Aruba",
    AX: "Ã…land Islands",
    AZ: "Azerbaijan",
    BA: "Bosnia and Herzegovina",
    BB: "Barbados",
    BD: "Bangladesh",
    BE: "Belgium",
    BF: "Burkina Faso",
    BG: "Bulgaria",
    BH: "Bahrain",
    BI: "Burundi",
    BJ: "Benin",
    BL: "Saint BarthÃ©lemy",
    BM: "Bermuda",
    BN: "Brunei",
    BO: "Bolivia",
    BQ: "British Antarctic Territory",
    BR: "Brazil",
    BS: "Bahamas",
    BT: "Bhutan",
    BV: "Bouvet Island",
    BW: "Botswana",
    BY: "Belarus",
    BZ: "Belize",
    CA: "Canada",
    CC: "Cocos [Keeling] Islands",
    CD: "Congo - Kinshasa",
    CF: "Central African Republic",
    CG: "Congo - Brazzaville",
    CH: "Switzerland",
    CI: "CÃ´te dâ€™Ivoire",
    CK: "Cook Islands",
    CL: "Chile",
    CM: "Cameroon",
    CN: "China",
    CO: "Colombia",
    CR: "Costa Rica",
    CS: "Serbia and Montenegro",
    CT: "Canton and Enderbury Islands",
    CU: "Cuba",
    CV: "Cape Verde",
    CX: "Christmas Island",
    CY: "Cyprus",
    CZ: "Czech Republic",
    DD: "East Germany",
    DE: "Germany",
    DJ: "Djibouti",
    DK: "Denmark",
    DM: "Dominica",
    DO: "Dominican Republic",
    DZ: "Algeria",
    EC: "Ecuador",
    EE: "Estonia",
    EG: "Egypt",
    EH: "Western Sahara",
    ER: "Eritrea",
    ES: "Spain",
    ET: "Ethiopia",
    FI: "Finland",
    FJ: "Fiji",
    FK: "Falkland Islands",
    FM: "Micronesia",
    FO: "Faroe Islands",
    FQ: "French Southern and Antarctic Territories",
    FR: "France",
    FX: "Metropolitan France",
    GA: "Gabon",
    GB: "United Kingdom",
    GD: "Grenada",
    GE: "Georgia",
    GF: "French Guiana",
    GG: "Guernsey",
    GH: "Ghana",
    GI: "Gibraltar",
    GL: "Greenland",
    GM: "Gambia",
    GN: "Guinea",
    GP: "Guadeloupe",
    GQ: "Equatorial Guinea",
    GR: "Greece",
    GS: "South Georgia and the South Sandwich Islands",
    GT: "Guatemala",
    GU: "Guam",
    GW: "Guinea-Bissau",
    GY: "Guyana",
    HK: "Hong Kong SAR China",
    HM: "Heard Island and McDonald Islands",
    HN: "Honduras",
    HR: "Croatia",
    HT: "Haiti",
    HU: "Hungary",
    ID: "Indonesia",
    IE: "Ireland",
    IL: "Israel",
    IM: "Isle of Man",
    IN: "India",
    IO: "British Indian Ocean Territory",
    IQ: "Iraq",
    IR: "Iran",
    IS: "Iceland",
    IT: "Italy",
    JE: "Jersey",
    JM: "Jamaica",
    JO: "Jordan",
    JP: "Japan",
    JT: "Johnston Island",
    KE: "Kenya",
    KG: "Kyrgyzstan",
    KH: "Cambodia",
    KI: "Kiribati",
    KM: "Comoros",
    KN: "Saint Kitts and Nevis",
    KP: "North Korea",
    KR: "South Korea",
    KW: "Kuwait",
    KY: "Cayman Islands",
    KZ: "Kazakhstan",
    LA: "Laos",
    LB: "Lebanon",
    LC: "Saint Lucia",
    LI: "Liechtenstein",
    LK: "Sri Lanka",
    LR: "Liberia",
    LS: "Lesotho",
    LT: "Lithuania",
    LU: "Luxembourg",
    LV: "Latvia",
    LY: "Libya",
    MA: "Morocco",
    MC: "Monaco",
    MD: "Moldova",
    ME: "Montenegro",
    MF: "Saint Martin",
    MG: "Madagascar",
    MH: "Marshall Islands",
    MI: "Midway Islands",
    MK: "Macedonia",
    ML: "Mali",
    MM: "Myanmar [Burma]",
    MN: "Mongolia",
    MO: "Macau SAR China",
    MP: "Northern Mariana Islands",
    MQ: "Martinique",
    MR: "Mauritania",
    MS: "Montserrat",
    MT: "Malta",
    MU: "Mauritius",
    MV: "Maldives",
    MW: "Malawi",
    MX: "Mexico",
    MY: "Malaysia",
    MZ: "Mozambique",
    NA: "Namibia",
    NC: "New Caledonia",
    NE: "Niger",
    NF: "Norfolk Island",
    NG: "Nigeria",
    NI: "Nicaragua",
    NL: "Netherlands",
    NO: "Norway",
    NP: "Nepal",
    NQ: "Dronning Maud Land",
    NR: "Nauru",
    NT: "Neutral Zone",
    NU: "Niue",
    NZ: "New Zealand",
    OM: "Oman",
    PA: "Panama",
    PC: "Pacific Islands Trust Territory",
    PE: "Peru",
    PF: "French Polynesia",
    PG: "Papua New Guinea",
    PH: "Philippines",
    PK: "Pakistan",
    PL: "Poland",
    PM: "Saint Pierre and Miquelon",
    PN: "Pitcairn Islands",
    PR: "Puerto Rico",
    PS: "Palestinian Territories",
    PT: "Portugal",
    PU: "U.S. Miscellaneous Pacific Islands",
    PW: "Palau",
    PY: "Paraguay",
    PZ: "Panama Canal Zone",
    QA: "Qatar",
    RE: "RÃ©union",
    RO: "Romania",
    RS: "Serbia",
    RU: "Russia",
    RW: "Rwanda",
    SA: "Saudi Arabia",
    SB: "Solomon Islands",
    SC: "Seychelles",
    SD: "Sudan",
    SE: "Sweden",
    SG: "Singapore",
    SH: "Saint Helena",
    SI: "Slovenia",
    SJ: "Svalbard and Jan Mayen",
    SK: "Slovakia",
    SL: "Sierra Leone",
    SM: "San Marino",
    SN: "Senegal",
    SO: "Somalia",
    SR: "Suriname",
    ST: "SÃ£o TomÃ© and PrÃ­ncipe",
    SU: "Union of Soviet Socialist Republics",
    SV: "El Salvador",
    SY: "Syria",
    SZ: "Swaziland",
    TC: "Turks and Caicos Islands",
    TD: "Chad",
    TF: "French Southern Territories",
    TG: "Togo",
    TH: "Thailand",
    TJ: "Tajikistan",
    TK: "Tokelau",
    TL: "Timor-Leste",
    TM: "Turkmenistan",
    TN: "Tunisia",
    TO: "Tonga",
    TR: "Turkey",
    TT: "Trinidad and Tobago",
    TV: "Tuvalu",
    TW: "Taiwan",
    TZ: "Tanzania",
    UA: "Ukraine",
    UG: "Uganda",
    UM: "U.S. Minor Outlying Islands",
    US: "United States",
    UY: "Uruguay",
    UZ: "Uzbekistan",
    VA: "Vatican City",
    VC: "Saint Vincent and the Grenadines",
    VD: "North Vietnam",
    VE: "Venezuela",
    VG: "British Virgin Islands",
    VI: "U.S. Virgin Islands",
    VN: "Vietnam",
    VU: "Vanuatu",
    WF: "Wallis and Futuna",
    WK: "Wake Island",
    WS: "Samoa",
    YD: "People's Democratic Republic of Yemen",
    YE: "Yemen",
    YT: "Mayotte",
    ZA: "South Africa",
    ZM: "Zambia",
    ZW: "Zimbabwe",
    ZZ: "Unknown or Invalid Region"
};