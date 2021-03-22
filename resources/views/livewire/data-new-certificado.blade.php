
    <div class="sm:max-w-7xl sm:mx-auto">
        <div class="flex flex-col mt-5 border">
          <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
              <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                <div class="pt-4 px-5 bg-gray-50">
                    <div class="px-3">
                        @livewire('modal-create-certificado')
                    </div>
                    <div class="px-3">
                        @livewire('modal-add-lote-certificado')
                    </div>
                </div>
                <div class="pb-4 px-5 bg-gray-50">
                    <table class="min-w-full divide-y divide-gray-200">
                      <thead class="bg-gray-50">
                        <tr>
                            <th rowspan="2" class="text-center text-xs">LOTE</th>
                            <th rowspan="2" class="text-center text-xs">MASA LINEAL kg/m</th>
                            <th colspan="5" class="text-center text-xs border-l">PROPIEDADES MECÁNICAS</th>
                            <th colspan="4" class="text-center text-xs border-l">GEOMETRIA DE CORRUGA</th>
                            <th colspan="5" class="text-center text-xs border-l">ANÁLISIS QUÍMICO</th>
                            <th rowspan="2"></th>
                          </tr>
                          <tr>
                              <th class="text-center text-xs">
                                  <div>Fy</div>
                                  <div>(MPa)</div>
                              </th>
                              <th class="text-center text-xs">
                                  <div>Fx</div>
                                  <div>(MPa)</div>
                              </th>
                              <th class="text-center text-xs">
                                  <div>A</div>
                                  <div>%</div>
                              </th>
                              <th class="text-center text-xs">
                                  <div>RE</div>
                                  <div>(Fx/Fy)</div>
                              </th>
                              <th class="text-center text-xs">
                                  <div>D</div>
                                  <div>180º</div>
                              </th>
                              <th class="text-center text-xs border-l">
                                  <div>ALTURA</div>
                                  <div>mm</div>
                              </th>
                              <th class="text-center text-xs">
                                  <div>ESPAC.</div>
                                  <div>mm</div>
                              </th>
                              <th class="text-center text-xs">
                                  <div>GAP</div>
                                  <div>mm</div>
                              </th>
                              <th class="text-center text-xs">
                                  <div>ANGULO</div>
                                  <div>º</div>
                              </th>
                              <th class="text-center text-xs border-l">%c</th>
                              <th class="text-center text-xs">%Mn</th>
                              <th class="text-center text-xs">%SI</th>
                              <th class="text-center text-xs">%P</th>
                              <th class="text-center text-xs">%S</th>
                          </tr>
                      </thead>
                      <tbody class="bg-white divide-y divide-gray-200">
                        @forelse ($items as $item)
                        <tr>
                            <td class="px-3 py-2 whitespace-nowrap text-center text-xs">
                                <div class="text-sm text-gray-900">{{ $item->code }}</div>
                            </td>
                            <td class="px-3 py-2 whitespace-nowrap text-center text-xs">
                                <div class="text-sm text-gray-900">{{ str_replace('.', ',', (trim(trim( round($item->masa_lineal, 2),0), '.'))) }}</div>
                            </td>
                            <td class="px-3 py-2 whitespace-nowrap text-center text-xs">
                                <div class="text-sm text-gray-900">{{ str_replace('.', ',', (trim(trim( round($item->mechanics->avg->fy, 2),0), '.'))) }}</div>
                            </td>
                            <td class="px-3 py-2 whitespace-nowrap text-center text-xs">
                                <div class="text-sm text-gray-900">{{ str_replace('.', ',', (trim(trim( round($item->mechanics->avg->fx, 2),0), '.'))) }}</div>
                            </td>
                            <td class="px-3 py-2 whitespace-nowrap text-center text-xs">
                                <div class="text-sm text-gray-900">{{ str_replace('.', ',', (trim(trim( round($item->mechanics->avg->a, 2),0), '.'))) }}</div>
                            </td>
                            <td class="px-3 py-2 whitespace-nowrap text-center text-xs">
                                <div class="text-sm text-gray-900">{{ str_replace('.', ',', (trim(trim( round($item->mechanics->avg->re , 2),0), '.'))) }}</div>
                            </td>
                            <td class="px-3 py-2 whitespace-nowrap text-center text-xs">
                                <div class="text-sm text-gray-900">{{ $item->mechanics[0]->d }}</div>
                            </td>
                            <td class="px-3 py-2 whitespace-nowrap text-center text-xs">
                                <div class="text-sm text-gray-900">{{ str_replace('.', ',', (trim(trim( round($item->mechanics->avg->altura, 2),0), '.'))) }}</div>
                            </td>
                            <td class="px-3 py-2 whitespace-nowrap text-center text-xs">
                                <div class="text-sm text-gray-900">{{ str_replace('.', ',', (trim(trim( round($item->mechanics->avg->espaciamiento, 2),0), '.'))) }}</div>
                            </td>
                            <td class="px-3 py-2 whitespace-nowrap text-center text-xs">
                                <div class="text-sm text-gray-900">{{ str_replace('.', ',', (trim(trim( round($item->mechanics->avg->gap, 2),0), '.'))) }}</div>
                            </td>
                            <td class="px-3 py-2 whitespace-nowrap text-center text-xs">
                                <div class="text-sm text-gray-900">{{ $item->mechanics->avg->angulo }}</div>
                            </td>
                            <td class="px-3 py-2 whitespace-nowrap text-center text-xs">
                                <div class="text-sm text-gray-900">{{ str_replace('.', ',', round($item->chemicals->avg->c, 2)) }}</div>
                            </td>
                            <td class="px-3 py-2 whitespace-nowrap text-center text-xs">
                                <div class="text-sm text-gray-900">{{ str_replace('.', ',', round($item->chemicals->avg->mn, 2)) }}</div>
                            </td>
                            <td class="px-3 py-2 whitespace-nowrap text-center text-xs">
                                <div class="text-sm text-gray-900">{{ str_replace('.', ',', round($item->chemicals->avg->si, 2)) }}</div>
                            </td>
                            <td class="px-3 py-2 whitespace-nowrap text-center text-xs">
                                <div class="text-sm text-gray-900">{{ str_replace('.', ',', round($item->chemicals->avg->p, 2)) }}</div>
                            </td>
                            <td class="px-3 py-2 whitespace-nowrap text-center text-xs">
                                <div class="text-sm text-gray-900">{{ str_replace('.', ',', round($item->chemicals->avg->s, 2)) }}</div>
                            </td>

                        </tr>
                    @empty
                    <tr>
                        <td class="px-3 py-2 whitespace-nowrap">
                          <div class="text-sm text-gray-900">----</div>
                        </td>
                        <td class="px-3 py-2 whitespace-nowrap">
                          <div class="text-sm text-gray-900">---</div>
                        </td>
                    </tr>
                    @endforelse
                      </tbody>
                    </table>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
