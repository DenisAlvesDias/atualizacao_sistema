materialAdmin
    .config(function ($stateProvider, $urlRouterProvider){
        $urlRouterProvider.otherwise("/home");

        $stateProvider        
            //------------------------------
            // HOME
            //------------------------------

            .state ('home', {
                url: '/home',
                templateUrl: 'template2/home.html?=2',
                 resolve: {
                    loadPlugin: function($ocLazyLoad) {
                        return $ocLazyLoad.load ([
                            {
                                name: 'css',
                                insertBefore: '#app-level',
                                files: [
                                    'vendors/bower_components/nouislider/jquery.nouislider.css',
                                   
                                ]
                            },
                            {
                                name: 'vendors',
                                files: [
                                    'vendors/input-mask/input-mask.min.js',                                  
                                    'vendors/bower_components/chosen/chosen.jquery.js',
                                    'vendors/bower_components/angular-chosen-localytics/chosen.js'
                                   
                                ]
                            }
                        ])
                    }
                }
               
            })


        
            //------------------------------
            // FORMS
            //------------------------------
            .state ('cadastro', {
                url: '/cadastro',
                templateUrl: 'views/common.html'
            })

            .state ('cadastro.meus_dados', {
                url: '/meus_dados',
                templateUrl: 'template2/meus_dados.html',
                resolve: {
                    loadPlugin: function($ocLazyLoad) {
                        return $ocLazyLoad.load ([
                            {
                                name: 'css',
                                insertBefore: '#app-level',
                                files: [
                                    'vendors/bower_components/nouislider/jquery.nouislider.css',
                                   
                                ]
                            },
                            {
                                name: 'vendors',
                                files: [
                                    'vendors/input-mask/input-mask.min.js',                                  
                                    'vendors/bower_components/chosen/chosen.jquery.js',
                                    'vendors/bower_components/angular-chosen-localytics/chosen.js'
                                   
                                ]
                            }
                        ])
                    }
                }
               
            })

 .state ('cadastro.avaliacao', {
                url: '/avaliacao',
                templateUrl: 'template2/avaliacao.html',
                resolve: {
                    loadPlugin: function($ocLazyLoad) {
                        return $ocLazyLoad.load ([
                            {
                                name: 'css',
                                insertBefore: '#app-level',
                                files: [
                                    'vendors/bower_components/nouislider/jquery.nouislider.css',
                                   
                                ]
                            },
                            {
                                name: 'vendors',
                                files: [
                                    'vendors/input-mask/input-mask.min.js',                                  
                                    'vendors/bower_components/chosen/chosen.jquery.js',
                                    'vendors/bower_components/angular-chosen-localytics/chosen.js'
                                   
                                ]
                            }
                        ])
                    }
                }
               
            })

 .state ('cadastro.relatorio_saida', {
                url: '/relatorio_saida',
                templateUrl: 'template2/relatorio_saida.html',
                resolve: {
                    loadPlugin: function($ocLazyLoad) {
                        return $ocLazyLoad.load ([
                            {
                                name: 'css',
                                insertBefore: '#app-level',
                                files: [
                                    'vendors/bower_components/nouislider/jquery.nouislider.css',
                                   
                                ]
                            },
                            {
                                name: 'vendors',
                                files: [
                                    'vendors/input-mask/input-mask.min.js',                                  
                                    'vendors/bower_components/chosen/chosen.jquery.js',
                                    'vendors/bower_components/angular-chosen-localytics/chosen.js'
                                   
                                ]
                            }
                        ])
                    }
                }
               
            })

.state ('cadastro.relatorio_produto', {
                url: '/relatorio_produto',
                templateUrl: 'template2/relatorio_produto.html',
                resolve: {
                    loadPlugin: function($ocLazyLoad) {
                        return $ocLazyLoad.load ([
                            {
                                name: 'css',
                                insertBefore: '#app-level',
                                files: [
                                    'vendors/bower_components/nouislider/jquery.nouislider.css',
                                   
                                ]
                            },
                            {
                                name: 'vendors',
                                files: [
                                    'vendors/input-mask/input-mask.min.js',                                  
                                    'vendors/bower_components/chosen/chosen.jquery.js',
                                    'vendors/bower_components/angular-chosen-localytics/chosen.js'
                                   
                                ]
                            }
                        ])
                    }
                }
               
            })

 .state ('cadastro.categoria', {
                url: '/categoria',
                templateUrl: 'template2/categoria.html',
                resolve: {
                    loadPlugin: function($ocLazyLoad) {
                        return $ocLazyLoad.load ([
                            {
                                name: 'css',
                                insertBefore: '#app-level',
                                files: [
                                    'vendors/bower_components/nouislider/jquery.nouislider.css',
                                   
                                ]
                            },
                            {
                                name: 'vendors',
                                files: [
                                    'vendors/input-mask/input-mask.min.js',                                  
                                    'vendors/bower_components/chosen/chosen.jquery.js',
                                    'vendors/bower_components/angular-chosen-localytics/chosen.js'
                                   
                                ]
                            }
                        ])
                    }
                }
               
            })

.state ('cadastro.cliente', {
                url: '/cliente',
                templateUrl: 'template2/cliente.html',
                resolve: {
                    loadPlugin: function($ocLazyLoad) {
                        return $ocLazyLoad.load ([
                            {
                                name: 'css',
                                insertBefore: '#app-level',
                                files: [
                                    'vendors/bower_components/nouislider/jquery.nouislider.css',
                                   
                                ]
                            },
                            {
                                name: 'vendors',
                                files: [
                                    'vendors/input-mask/input-mask.min.js',                                  
                                    'vendors/bower_components/chosen/chosen.jquery.js',
                                    'vendors/bower_components/angular-chosen-localytics/chosen.js'
                                   
                                ]
                            }
                        ])
                    }
                }
               
            })

.state ('cadastro.monte_produto', {
                url: '/monte_produto',
                templateUrl: 'template2/monte_produto.html',
                resolve: {
                    loadPlugin: function($ocLazyLoad) {
                        return $ocLazyLoad.load ([
                            {
                                name: 'css',
                                insertBefore: '#app-level',
                                files: [
                                    'vendors/bower_components/nouislider/jquery.nouislider.css',
                                   
                                ]
                            },
                            {
                                name: 'vendors',
                                files: [
                                    'vendors/input-mask/input-mask.min.js',                                  
                                    'vendors/bower_components/chosen/chosen.jquery.js',
                                    'vendors/bower_components/angular-chosen-localytics/chosen.js'
                                   
                                ]
                            }
                        ])
                    }
                }
               
            })

            .state ('cadastro.produto', {
                url: '/produto',
                templateUrl: 'template2/produto.html',
                resolve: {
                    loadPlugin: function($ocLazyLoad) {
                        return $ocLazyLoad.load ([
                            {
                                name: 'css',
                                insertBefore: '#app-level',
                                files: [
                                    'vendors/bower_components/nouislider/jquery.nouislider.css',
                                   
                                ]
                            },
                            {
                                name: 'vendors',
                                files: [
                                    'vendors/input-mask/input-mask.min.js',                                  
                                    'vendors/bower_components/chosen/chosen.jquery.js',
                                    'vendors/bower_components/angular-chosen-localytics/chosen.js'
                                   
                                ]
                            }
                        ])
                    }
                }
               
            })

.state ('cadastro.adicional', {
    url: '/adicional',
    templateUrl: 'template2/adicional.html',
    resolve: {
        loadPlugin: function($ocLazyLoad) {
            return $ocLazyLoad.load ([
                {
                    name: 'css',
                    insertBefore: '#app-level',
                    files: [
                        'vendors/bower_components/nouislider/jquery.nouislider.css',
                       
                    ]
                },
                {
                    name: 'vendors',
                    files: [
                        'vendors/input-mask/input-mask.min.js',                                  
                        'vendors/bower_components/chosen/chosen.jquery.js',
                        'vendors/bower_components/angular-chosen-localytics/chosen.js'
                       
                    ]
                }
            ])
        }
    }
   
})

.state ('cadastro.promocao', {
    url: '/promocao',
    templateUrl: 'template2/promocao.html',
    resolve: {
        loadPlugin: function($ocLazyLoad) {
            return $ocLazyLoad.load ([
                {
                    name: 'css',
                    insertBefore: '#app-level',
                    files: [
                        'vendors/bower_components/nouislider/jquery.nouislider.css',
                       
                    ]
                },
                {
                    name: 'vendors',
                    files: [
                        'vendors/input-mask/input-mask.min.js',                                  
                        'vendors/bower_components/chosen/chosen.jquery.js',
                        'vendors/bower_components/angular-chosen-localytics/chosen.js'
                       
                    ]
                }
            ])
        }
    }
   
})

.state ('cadastro.forma_pagamento', {
    url: '/forma_pagamento',
    templateUrl: 'template2/forma_pagamento.html',
    resolve: {
        loadPlugin: function($ocLazyLoad) {
            return $ocLazyLoad.load ([
                {
                    name: 'css',
                    insertBefore: '#app-level',
                    files: [
                        'vendors/bower_components/nouislider/jquery.nouislider.css',
                       
                    ]
                },
                {
                    name: 'vendors',
                    files: [
                        'vendors/input-mask/input-mask.min.js',                                  
                        'vendors/bower_components/chosen/chosen.jquery.js',
                        'vendors/bower_components/angular-chosen-localytics/chosen.js'
                       
                    ]
                }
            ])
        }
    }
   
})

.state ('cadastro.taxa_entrega', {
    url: '/taxa_entrega',
    templateUrl: 'template2/taxa_entrega_bairro.html',
    resolve: {
        loadPlugin: function($ocLazyLoad) {
            return $ocLazyLoad.load ([
                {
                    name: 'css',
                    insertBefore: '#app-level',
                    files: [
                        'vendors/bower_components/nouislider/jquery.nouislider.css',
                       
                    ]
                },
                {
                    name: 'vendors',
                    files: [
                        'vendors/input-mask/input-mask.min.js',                                  
                        'vendors/bower_components/chosen/chosen.jquery.js',
                        'vendors/bower_components/angular-chosen-localytics/chosen.js'
                       
                    ]
                }
            ])
        }
    }
   
})

.state ('cadastro.horario_funcionamento', {
    url: '/horario_funcionamento',
    templateUrl: 'template2/horario_funcionamento.html',
    resolve: {
        loadPlugin: function($ocLazyLoad) {
            return $ocLazyLoad.load ([
                {
                    name: 'css',
                    insertBefore: '#app-level',
                    files: [
                        'vendors/bower_components/nouislider/jquery.nouislider.css',
                       
                    ]
                },
                {
                    name: 'vendors',
                    files: [
                        'vendors/input-mask/input-mask.min.js',                                  
                        'vendors/bower_components/chosen/chosen.jquery.js',
                        'vendors/bower_components/angular-chosen-localytics/chosen.js'
                       
                    ]
                }
            ])
        }
    }
   
})
          
    });
