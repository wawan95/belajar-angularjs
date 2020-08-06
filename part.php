<div>

    <input type="text" ng-model="hasil">
    <ul>
        <li ng-repeat = "dn in data | filter:hasil | orderBy: 'nama' ">
            {{ dn.nama | uppercase}} Kota:{{ dn.kota | lowercase }}
        </li>
    </ul>
</div>